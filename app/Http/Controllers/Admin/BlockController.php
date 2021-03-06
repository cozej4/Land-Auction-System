<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Block;

use App\Http\Requests\CreateBlockRequest;
use App\UserDetail;
use Illuminate\Support\Facades\Session;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blocks = Block::all();

        $user = UserDetail::findOrFail(Session::get('id'));

        return view('admin.blocks.index', compact('blocks', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = UserDetail::findOrFail(Session::get('id'));
        
        return view('admin.blocks.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateBlockRequest|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlockRequest $request)
    {
        Block::create($request->all());

        flash()->success('Kitalu ' . $request->input('name') . ' kimefanikiwa kuongezwa');

        return redirect('admin/blocks/create');
    }

    /**
     * Display the specified resource.
     *
     * @param $block_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function show($block_id)
    {
        $block = Block::findOrFail($block_id);

        $user = UserDetail::findOrFail(Session::get('id'));

        return view('admin.blocks.show', compact('block', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $block_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function edit($block_id)
    {
        $block = Block::findOrFail($block_id);

        $user = UserDetail::findOrFail(Session::get('id'));

        return view('admin.blocks.edit', compact('block', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CreateBlockRequest|\Illuminate\Http\Request $request
     * @param $block_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function update(CreateBlockRequest $request, $block_id)
    {
        $block = Block::findOrFail($block_id);

        $block->update($request->all());

        flash()->success('Kitalu ' . $block->name . ' kimefanikiwa kuhaririwa');

        return redirect('admin/blocks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $block_id
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($block_id)
    {
        $block = Block::findOrFail($block_id);

        $block->delete();

        flash()->success('Kitalu ' . $block->name . ' kimefanikiwa kufutwa');

        return redirect('admin/blocks');
    }
}
