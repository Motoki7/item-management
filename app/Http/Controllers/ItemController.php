<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * 商品一覧
     */
    public function index()
    {
        // 商品一覧取得
        $items = Item
            ::where('items.status', 'active')
            ->select()
            ->get();

        return view('item.index', compact('items'));
    }

    /**
     * 商品登録
     */
    public function add(Request $request)
    {
        // POSTリクエストのとき
        if ($request->isMethod('post')) {
            // バリデーション
            $this->validate($request, [
                'name' => 'required|max:100',
            ]);

            // 商品登録
            Item::create([
                'user_id' => Auth::user()->id,
                'name' => $request->name,
                'type' => $request->type,
                'detail' => $request->detail,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'cost_price' => $request->cost_price,
                'gains' => $request->price - $request->cost_price,
            ]);

            return redirect('/items');
        }

        return view('item.add');
    }

    //アイテム削除
    public function destroy(Request $request, item $id)
    {
        $id->delete();
        return redirect('/items');
    }

    /**
     * 編集画面
     */
    public function editing($id)
    {
        $item = Item::find($id);
        return view('item.editing', compact('item'));
    }

        /**
     * 詳細画面
     */
    public function detail($id)
    {
        $item = Item::find($id);
        return view('item.detail', compact('item'));
    }

            /**
     * 売上画面
     */
    public function earnings()
    {
        return view('item.earnings');
    }
}
