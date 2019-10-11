
@extends('faq::faqNav')

@section('pageTitle', 'سوالات متداول')

@section('content')
    <section>
    @foreach($faqs as $faq)
          <h2>{{$faq->q}}</h2>
      {{$faq->a}}
  @endforeach
    </section>

    @endsection
