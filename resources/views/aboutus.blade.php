@extends('layouts.app')
@vite(['resources/css/aboutus.css'])
@section('title', 'TeachINUK - Register')

@section('content')
    <!-- Main Content -->
    <div class="content">
        <div class="row top-50">
            <div class="col-xl-4">
                <div class="quote-box">
                    <div class="card-box pd-50">
                        <h2>To teach in UK you need the following:</h2>
                        <div class="list-requirements">
                            <ul>
                                <li>Degree</li>
                                <li>Teacher training (<em>Máster profesorado</em>)</li>
                                <li>B2 level of English</li>
                                <li>9 months teaching experience (not essential)</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5"></div>
            <div class="col-xl-3 no-space alignRight">
                <div class="quote-box">
                    <div class="card-box pd-50">
                        <h2>We offer: </h2>
                        <div class="list-requirements right">
                            <ul>
                                <li>Assistance With Validating The Qualification To Teach In UK</li>
                                <li>Guiadance For The Intterview</li>
                                <li>Secure Your First Teaching Job in the UK!</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection