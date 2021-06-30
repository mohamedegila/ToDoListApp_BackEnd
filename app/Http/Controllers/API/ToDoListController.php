<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ItemResource;
use Symfony\Component\HttpFoundation\Response;

use App\Models\item;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return items even if it soft deleted
        // $item = item::withTrashed()->paginate(5);

        $item = item::paginate(5);

        $count = Item::where('completed', 1)
        ->count();

        $data = ["status" => 200, 'completed'=>$count,'data' =>  $item];
        return response()->json($data, Response::HTTP_OK);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreItemRequest $request)
    {
        $item = item::create($request->all());
        $data = ["status" => 200, 'data' =>  new ItemResource($item)];
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return new ItemResource($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateItemRequest $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());
        $data = ['status' => 200, 'data' =>  new ItemResource($item)];
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        $data = ['status' => 200];
        return response()->json($data);
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function toggleCompleted($id)
    {
        $item = Item::findOrFail($id);
        $completed = !$item->completed;
        if ($completed) {
            $item->completed = $completed;
            $item->completed_at = now();
        } else {
            $item->completed = $completed;
            $item->completed_at = null;
        }
        $item->save();
        $data = ['status' => 200,'item'=>$item ];
        return response()->json($data);
    }
}
