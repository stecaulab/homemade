@extends('layouts.master')

<x-single-post :post="$post" :post-id="$post" :user="auth()->user()"></x-single-post>



