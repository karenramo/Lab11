@extends('layouts.app')

@section('content')


<main>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


  <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <input class="form-control form-control-lg" type="text" placeholder="" aria-label=".form-control-lg example">
  <div class="input-group">
    <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
    <span class="input-group-text">$</span>
    <span class="input-group-text">0.00</span>
    <div class="input-group mb-3">
        <span class="input-group-text">Cantidad</span>
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
      </div>
