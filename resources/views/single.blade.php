@extends('layouts.second')

<x-single-post :post="$post" :post-id="$post" :categories="$categories" :user="auth()->user()"></x-single-post>



