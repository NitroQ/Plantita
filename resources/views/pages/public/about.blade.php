@extends('layout.client.front')
@section('title', 'About Us')
@section('content')
<section class="">
  <div>
    <p class=" font-brandon-bold text-green-200 text-2xl">About Us</p>
    <p class="text-5xl">Plantita: Cultivating Green Dreams for Over 5 Years</p>
    <p class="text-5xl">- <span class="font-brandon-black italic text-green-200 text-5xl">A Remarkable Journey of Shared Passion</span></p>
    <img class="rounded-xl w-full mt-10 h-[35vh] object-cover" src="{{ asset('images/about/about-hero.webp') }}" alt="watering can and plant">
    <div class="grid grid-rows-1">
      <div class="grid grid-cols-1 2xl:grid-cols-6 mt-3">
        <div class="2xl:col-span-2 hidden 2xl:block">
          <img class="mt-4 rounded-xl w-full h[30vh]" src="{{ asset('images/about/about-planting.webp') }}" alt="watering can and plant">
          <img class="mt-4 rounded-xl w-full h[30vh]" src="{{ asset('images/about/about-seedling.webp') }}" alt="watering can and plant">
        </div>
        <div class="2xl:col-span-4 px-10 text-2xl text-justify space-y-8">
          <p class="mt-4 mb-2 text-3xl">
            In the heart of our story lies a passion for plants that has been nurtured over decades.
            Plantita, much more than just an <span class="italic">e-commerce website</span>,
            <span class="font-brandon-bold text-green-200">embodies the culmination of a lifelong love affair with nature.</span>
          </p>
          <div class="space-y-5">
            <p class="">
              Our journey began over 5 years ago when a group of friends - Frank, Cass, Louie, Gabby, Raegan, and Niel -
              embarked on a shared mission to explore the world of landscape design and horticulture.
            </p>
            <p class="">
              It was this wealth of experience and their shared dream to make plants more accessible to everyone that gave
              birth to Plantita. With Frank's innate design sense, Cass's botanical expertise, Louie's landscaping prowess,
              Gabby's knack for plant care, Raegan's creativity, and Niel's horticultural wisdom, they set out to curate a
              collection of plants that were not only beautiful but also easy to care for. They wanted to empower others to
              create their own lush, indoor jungles, even if they were new to the world of gardening.
            </p>
            <p class="">
              At Plantita, our mission is to share the joy of plant parenthood with the world. We believe that everyone can
              experience the magic of nurturing a living being and watching it thrive. With Frank, Cass, Louie, Gabby, Raegan,
              and Niel's expertise as our guiding force, we provide carefully selected plants, along with expert advice and
              resources, to help you turn your space into a thriving oasis.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection