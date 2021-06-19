@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block text-center">
                <h1 class="sm:text-white text-4xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 p-3 font-bold text-xl uppercase"
                >
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-5 w-5/6 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" width="400">
        </div>
        <div class="m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>

            <p class="py-8 text-gray-500 text-sm">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, accusantium.
            </p>

            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum sit culpa tenetur nisi, accusantium ex cumque eos? Autem aliquam necessitatibus culpa eos
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-sm font-extrabold py-3 px-8 rounded-3xl"
            >
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5">
            I'm an expert in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>
    <div class="text-center py-15">
        <span class="uppercase text-sm text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati at corporis animi molestias quisquam harum illum enim, nostrum consequuntur minima suscipit
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur blanditiis quae eligendi soluta? Id, voluptatibus rerum. Mollitia fuga voluptate voluptas nobis perferendis, officia impedit placeat repudiandae deserunt ut, voluptatibus sit?
                </h3>
                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl"
                >
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="" width="500">
        </div>
    </div>
@endsection