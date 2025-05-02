@extends('front.layouts.app')
@section('content')
    <div id="header" class="bg-[#F6F7FA] relative">
        <div class="container max-w-[1130px] mx-auto relative pt-10 z-10">
            <x-navbar />
            <div class="flex flex-col gap-[50px] items-center py-20">
                <div class="breadcrumb flex items-center justify-center gap-[30px]">
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">Home</p>
                    <span class="text-cp-light-grey">/</span>
                    <p class="text-cp-light-grey last-of-type:text-cp-black last-of-type:font-semibold">About Us</p>
                </div>
                <h2 class="font-bold text-4xl leading-[45px] text-center">Since Beginning We Only <br> Want to Make World
                    Better</h2>
            </div>
        </div>
    </div>

    <div id="Products" class="container max-w-[1130px] mx-auto flex flex-col gap-20 mt-20">

        @forelse ($abouts as $about)
            <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
                <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                    <img src="{{ Storage::url($about->thumbnail) }}" class="w-full h-full object-contain"
                        alt="thumbnail">
                </div>
                <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                    <p
                        class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                        {{ $about->type }}</p>
                    <div class="flex flex-col gap-[10px]">
                        <h2 class="font-bold text-4xl leading-[45px]">{{ $about->name }}</h2>
                        <div class="flex flex-col gap-5">
                            @forelse ($about->keypoints as $keypoint)
                            <div class="flex items-center gap-[10px]">
                                <div class="w-6 h-6 flex shrink-0">
                                    <img src="assets/icons/tick-circle.svg" alt="icon">
                                </div>
                                <p class="leading-[26px] font-semibold">{{ $keypoint->keypoint}}</p>
                            </div>
                            @empty
                                <p class="leading-[26px] font-semibold">No keypoints available</p>
                            @endforelse
                            
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No abouts found</p>
        @endforelse

        {{-- <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
            <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                <img src="assets/thumbnails/product cover three.png" class="w-full h-full object-contain" alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR VISIONS</p>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold text-4xl leading-[45px]">Build Gorgeous Buildings Yet Also Family Friendly</h2>
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Commit to delivering the highest quality in every
                                project. Set the standard for excellence world</p>
                        </div>
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Focus on building strong, lasting relationships with
                                clients by understanding their needs</p>
                        </div>
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Embrace innovative construction methods and sustainable
                                practices to minimize environmt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product flex flex-wrap justify-center items-center gap-[60px] even:flex-row-reverse">
            <div class="w-[470px] h-[550px] flex shrink-0 overflow-hidden">
                <img src="assets/thumbnails/product cover one.png" class="w-full h-full object-contain" alt="thumbnail">
            </div>
            <div class="flex flex-col gap-[30px] py-[50px] h-fit max-w-[500px]">
                <p
                    class="badge w-fit bg-cp-pale-blue text-cp-light-blue p-[8px_16px] rounded-full uppercase font-bold text-sm">
                    OUR MISSIONS</p>
                <div class="flex flex-col gap-[10px]">
                    <h2 class="font-bold text-4xl leading-[45px]">Build Gorgeous Buildings Yet Also Family Friendly</h2>
                    <div class="flex flex-col gap-5">
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Commit to delivering the highest quality in every
                                project. Set the standard for excellence world</p>
                        </div>
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Focus on building strong, lasting relationships with
                                clients by understanding their needs</p>
                        </div>
                        <div class="flex items-center gap-[10px]">
                            <div class="w-6 h-6 flex shrink-0">
                                <img src="assets/icons/tick-circle.svg" alt="icon">
                            </div>
                            <p class="leading-[26px] font-semibold">Embrace innovative construction methods and sustainable
                                practices to minimize environmt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>

    {{-- Client Section --}}
    <div id="Clients" class="container max-w-[1130px] mx-auto flex flex-col justify-center text-center gap-5 mt-20">
        <h2 class="font-bold text-lg">Trusted by 500+ Top Leaders Worldwide</h2>
        <div class="logo-container flex flex-wrap gap-5 justify-center">
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-44.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-55.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-52.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-54.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
            <div
                class="logo-card h-[68px] w-fit flex items-center shrink-0 border border-[#E8EAF2] rounded-[18px] p-4 gap-[10px] bg-white hover:border-cp-dark-blue transition-all duration-300">
                <div class="overflow-hidden h-9">
                    <img src="assets/logo/logo-51.svg" class="object-contain w-full h-full" alt="logo">
                </div>
            </div>
        </div>
    </div>

    <x-footer />
@endsection
