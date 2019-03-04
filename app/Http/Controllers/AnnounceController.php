<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Announce;
use App\Models\Announce_type;

use DB;
use SEO;
use SEOMeta;
use Session;
use OpenGraph;


class AnnounceController extends Controller
{
	public function getIndex()
	{
		// SEO
		// SEO::setTitle('สติ๊กเกอร์ไลน์ยอดนิยม');
		// SEO::setDescription('รวมสติ๊กเกอร์ไลน์ขายดี แนะนำ ฮิตๆ ยอดนิยม');

		$data['rs'] = new Announce;
		$data['rs'] = $data['rs']->orderBy('id', 'desc')->paginate(10);
		return view('announce.index', $data);
	}

	public function getType($id){
		$data['type'] = Announce_type::find($id);
		$data['rs'] = new Announce;
		$data['rs'] = $data['rs']->where('announce_type_id',$id)->where('status','public')->orderBy('id', 'desc')->paginate(8);
		return view('announce.index', $data);
	}

	public function getView($param = null)
	{
		$data['rs'] = Announce::where('slug', $param)->orWhere('id', $param)->firstOrFail();
		
		// tracking
		// $array = @array_merge(Session::get('track_sticker'), array($data['rs']->id));
		// Session::set('track_sticker', $array);
		// dump(array_unique(Session::get('track_sticker')));

		// SEO
		// SEO::setTitle($data['rs']->name . ' - สติ๊กเกอร์ไลน์');
		// SEO::setDescription('สติ๊กเกอร์ไลน์' . $data['rs']->description);
		// SEO::opengraph()->setUrl(url()->current());
		// SEO::addImages('http://sdl-stickershop.line.naver.jp/products/0/0/' . $data['rs']->version . '/' . $data['rs']->sticker_code . '/LINEStorePC/main@2x.png');
		// SEO::twitter()->setSite('@line2me_th');
		// SEOMeta::setKeywords('line, sticker, theme, creator, animation, sound, popup, ไลน์, สติ๊กเกอร์, ธีม, ครีเอเทอร์, ดุ๊กดิ๊ก, มีเสียง, ป๊อปอัพ');
		// SEOMeta::addKeyword('line, sticker, theme, creator, animation, sound, popup, ไลน์, สติ๊กเกอร์, ธีม, ครีเอเทอร์, ดุ๊กดิ๊ก, มีเสียง, ป๊อปอัพ');
		// OpenGraph::addProperty('image:width', '240');
		// OpenGraph::addProperty('image:height', '240');

		return view('Announce.view', $data);
	}
}
