<?php

namespace App\Http\Controllers;

use App\Shoe;
use App\Brand;
use App\Category;
use App\Type;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(Request $req)
    {
        $shoes = Shoe::
        whereHas('category', function($q) use ($req){
            $q->where('name', 'like', "%".ucfirst($req->category) . "%");
        })->
        whereHas('brand', function($q) use ($req){
            $q->where('name', 'like', "%".ucfirst($req->brand) . "%");
        })->
        whereHas('type', function($q) use ($req){
            $q->where('name', 'like', "%".ucfirst($req->type) . "%");
        })
        ->paginate(10);
        $brands = Brand::all();
        $categories = Category::all();
        $types = Type::all();
        return view('homepage')->withShoes($shoes)->withTypes($types)->withCategories($categories)->withBrands($brands);
    }

    public function index()
    {
        $shoes = Shoe::paginate(10);
        return view('shoes')->withShoes($shoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $categories = Category::all();
        $brands = Brand::all();

        return view('shoe-create')->withTypes($types)->withCategories($categories)->withBrands($brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('picture')) {
            $filename = $request->picture->getClientOriginalName();
            // $name = pathinfo($filename, PATHINFO_FILENAME);
            $ext = $request->picture->getClientOriginalExtension();
            $attachment = $filename . "_" . time() . "." . $ext;
            $request->picture->storeAs('public/pictures', $attachment);
            
            Shoe::create([
                'name' => $request->name,
                'type_id' => $request->type_id,
                'brand_id' => $request->brand_id,
                'category_id' => $request->category_id,
                'picture' => $attachment
            ]);
        }


        return redirect()->route('sepatu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = Type::all();
        $categories = Category::all();
        $brands = Brand::all();
        $shoe = Shoe::findOrFail($id);

        return view('shoe-edit')->withTypes($types)->withCategories($categories)->withBrands($brands)->withShoe($shoe);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Shoe::whereId($id)->update([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id
        ]);

        return redirect()->route('sepatu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shoe  $shoe
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Shoe::destroy($id);

        return redirect()->route('sepatu.index');
    }
}
