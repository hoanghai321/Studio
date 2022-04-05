@extends('errors::minimal')

@section('title', __('Succsess'))
@section('code', 'SUCCSESS')
@section('message', __($exception->getMessage() ?: 'Thành công'))
