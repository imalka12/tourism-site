<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preconnect" href="https://www.gstatic.com">
    @include('layouts.partials.meta')
    @include('layouts.partials.styles')
    @stack('custom-css')
</head>

<body>