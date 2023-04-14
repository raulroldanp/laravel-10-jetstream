<div class="text-center">
    <a wire:click.prevent='vote(1)' href="#"><i class="fa fa-2x fa-sort-asc" aria-hidden="hidden"></i></a>
    <div class="text-3xl">{{ $sumVotes }}</div>
    <a wire:click.prevent='vote(-1)' href="#"><i class="fa fa-2x fa-sort-desc" aria-hidden="hidden"></i></a>
</div>