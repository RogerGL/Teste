@props(['trigger'])
@props(['slot'])
<div x-data="{show: false}" @click.away="show = false">

<!-- Triggers -->
 <div @click="show = ! show">
     {{$trigger}}
 
 


<!-- LINKS -->

<div x-show="show" class="py-2 absolute bg-gray-100  mt-2 rounded-xl w-full z-50" style="display:none">

    {{$slot}}
</div>
</div>
