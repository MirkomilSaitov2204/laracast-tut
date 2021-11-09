@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-info',
        'warning'  => 'bg-warning'
    ]

])


<section  {{ $attributes->merge(['class' => "$colors[$type]"]) }} style="margin-bottom: 10px">
    <div class="container">
        {{ $slot }}
    </div>
</section>
