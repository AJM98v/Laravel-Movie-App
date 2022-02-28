@props(['active'])
@php
    if ($active){
        $class ="text-white no-underline uppercase text-lg p-2 font-semibold border-b border-b-white transition-all duration-200 ease-in cursor-pointer bg-gray-800 h-14 leading-relaxed"  ;
    }else{
        $class =" text-white no-underline uppercase text-lg p-2 font-semibold hover:border-b border-b-white transition-all duration-200 ease-in cursor-pointer hover:bg-gray-800 h-14 leading-relaxed";
    }

@endphp
<li class="{{$class}}">
    <a {{$attributes->merge(['class'])}}>
        {{$slot}}
    </a>

</li>
