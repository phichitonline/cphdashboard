@extends('layouts.theme')

@section('content')

@foreach ($sumopd as $data)
{{ $data->OFC }}
@endforeach

                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-graph text-success"></i>
                                    </div>
                                    <div>
                                        Page 1
                                        <div class="page-title-subheading">Build whatever layout you need with our Architect framework.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


@endsection
