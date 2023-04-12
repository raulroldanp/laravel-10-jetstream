<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h2 class="font-medium text-2xl text-gray-800 leading-tight">{{ $title }}</h2>
    <ul class="list-disc mt-6 ms-2 text-gray-500 font-semibold">
        @foreach ($links as $link)
            <li class="mb-2 hover:text-indigo-700">
                <a href="{{ route($link['link']) }}">{{ $link['title'] }}</a>
            </li>
        @endforeach        
    </ul>
</div>