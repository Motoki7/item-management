<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditingController extends Controller
{
    /**
 * Show the form for editing the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function edit($id)
{
    $item = Item::find($id);

    return view('item.editing', [
        'product' => $product
    ]);
}

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function update(ProductRequest $request, $id)
{
    $product = Product::find($id);
    $product->fill($request->all())->save();

    // 一覧へ戻り完了メッセージを表示
    return redirect()->route('product.index')->with('message', '編集しました');
}
}
