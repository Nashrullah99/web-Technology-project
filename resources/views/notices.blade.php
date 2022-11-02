@extends('layouts.common')
@section('content')
<div>
            <div class="container heading">
                <div class="heading-container">
                    <div class="heading-text">
                        <h4>Notices</h4>
                    </div>
                </div>      
            </div>
            <div class="container">
                @foreach($noticefiles as $noticefile)
                <div class="notice">
                    <div>
                        <p>{{ $noticefile->created_at }}</p>
                        <a href="files/noticefiles/{{ $noticefile->noticefiles}}"> <p>{{ $noticefile->description}}</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                @endforeach
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT nashrullah anummmhs hhsjddbbb</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                <div class="notice">
                    <div>
                        <p>30 novenber, 2022</p>
                        <a href=""> <p>admission notice for msc in ICT</p></a>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Download</button>
                    </div>
                </div>
                
            </div>
          </div>
@endsection