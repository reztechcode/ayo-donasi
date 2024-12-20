<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::with('category')->paginate(10);
        return view('admin.campaign.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.campaign.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'nullable|exists:categories,category_id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_amount' => 'required|numeric|min:1',
            'start_date' => 'nullable|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image_path' => 'nullable|image|max:2048',
            'status' => 'required|string|in:on,off',
        ]);

        // Mengupload gambar jika ada
        if ($request->hasFile('image_path')) {
            $validated['image_path'] = $request->file('image_path')->store('campaigns', 'public');
        }
        $validated['status'] = $request->input('status') === 'on' ? 1 : 0;
        $campaign = Campaign::create($validated);

        return redirect()->route('campaigns.index')->with('success', 'Campaign berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $campaign = Campaign::findOrFail($id);
        $categories = Category::all();
        return view('admin.campaign.edit', compact('campaign', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category_id' => 'nullable|exists:categories,category_id',
            'target_amount' => 'required|numeric|min:0',
            'start_date' => 'nullable|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk file gambar
            'status' => 'nullable|string|in:on,off',
        ]);

        // Cari campaign berdasarkan ID
        $campaign = Campaign::findOrFail($id);

        // Perbarui slug jika title berubah
        if ($campaign->title !== $validatedData['title']) {
            $validatedData['slug'] = Str::slug($validatedData['title']) . '-' . Str::uuid();
        }

        // Jika ada file gambar yang diupload
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('campaigns', 'public');
            $validatedData['image_path'] = $imagePath;

            // Opsional: Hapus file gambar lama
            if ($campaign->image_path) {
                Storage::disk('public')->delete($campaign->image_path);
            }
        }
        $validated['status'] = $request->input('status') === 'on' ? 1 : 0;
        // Perbarui campaign dengan data yang tervalidasi
        $campaign->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect()
            ->route('campaigns.index')
            ->with('success', 'Campaign berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campaign = Campaign::find($id);
        if ($campaign) {
            // Hapus file image_path jika ada
            if ($campaign->image_path) {
                $image_path = public_path('storage/' . $campaign->image_path);
                if (file_exists($image_path)) {
                    Storage::disk('public')->delete($campaign->image_path);
                }
            }
            $campaign->delete();
            return redirect()->route('campaigns.index')->with('success', 'Kampanye Donasi berhasil dihapus');
        } else {
            return redirect()->route('campaigns.index')->with('error', 'Kampanye Donasi tidak ditemukan');
        }
    }
}
