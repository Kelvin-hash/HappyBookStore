@extends('template')
@section('container')
    <article>
        <h3 class="bg-warning p-3">Book Details</h3>
        <div>
            <p>Title: {{ $book->title }}</p>
            <p>Author: {{ $book->BookDetails->author }}</p>
            <p>Publisher: {{ $book->BookDetails->publisher }}</p>
            <p>Year: {{ $book->BookDetails->year }}</p>
            <p>Description: </p>
            <p>{{ $book->BookDetails->description }}</p>
        </div>
    </article>
@endsection
