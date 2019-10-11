<?php

namespace faq\Http\Controllers;

use App\Http\Controllers\Controller;
use faq\Models\Faq;
use Illuminate\Http\Request;
use function back;
use function redirect;

class FaqController extends Controller
{
    public function getAllTableRecords()
    {
        return Faq::all();
    }

    public function index()
    {
        $faqs = $this->getAllTableRecords();
        return view('faq::faq', compact('faqs'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request, Faq $faq)
    {
        $faq->create($request->all());
        return back();
    }


    public function show($faq)
    {
        $faq = Faq::find($faq);
        return view('faq::faqShow', compact('faq'));
    }

    public function edit($faq)
    {
        $faq = Faq::find($faq);
        return view('faq::faqEdit', compact('faq'));
    }

    public function update(Request $request, $faq)
    {
        $faq = Faq::find($faq);
        $faq->update($request->all());
        return redirect('/faqAdmin');
    }

    public function destroy($faq)
    {
        $faq = Faq::find($faq);
        $faq->delete();
        return back();
    }

    public function admin()
    {
        $faqs = $this->getAllTableRecords();
        return view('faq::faqAdmin', compact('faqs'));
    }
}
