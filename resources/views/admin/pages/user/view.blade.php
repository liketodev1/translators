@extends('admin.app')
@section('title','User Jon')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ asset('bower_components/admin-lte/dist/img/user4-128x128.jpg') }}"
                             alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    <p class="text-muted text-center">Translator</p>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <tbody>

                        <tr>
                            <th style="width: 20%">Industry specialization</th>
                            <td>
                                @if(count($user->specializations)>0)
                                    @foreach($user->specializations as $item)
                                       <div style="font-size: 14px">{{ $item->name }} </div>
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Specification</th>
                            <td>
                                @if(count($user->specifications)>0)
                                    @foreach($user->specifications as $item)
                                       <div style="font-size: 14px">{{ $item->name }} </div>
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Qualifications and certifications</th>
                            <td>
                                @if(count($user->certifications)>0)
                                    @foreach($user->certifications as $item)
                                       <div><a href="{{ Storage::url($item->path) }}" download="" style="font-size: 14px">Download file</a> </div>
                                    @endforeach
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Years of experience:</th>
                            <td>
                                @if($user->profile)
                                    <div>{{ $user->profile->experience }}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Years of experience:</th>
                            <td>
                                @if($user->profile)
                                     <div style="font-size: 14px">{{ $user->profile->public_sector==1?'Public sector':'' }}</div>
                                     <div style="font-size: 14px">{{ $user->profile->private_sector==1?'Private Sector':'' }}</div>
                                     <div style="font-size: 14px">{{ $user->profile->education=== 1?'Education':'' }}</div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Linked Accounts</th>
                            <td>
                                @if($user->profile)
                                     <div style="font-size: 14px"><a href="{{ $user->profile->linkedin }}">{{ $user->profile->linkedin }}</a></div>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Resume</th>
                            <td>
                                @if($user->profile)
                                    <a href="{{ Storage::url($user->profile->resume) }}"
                                       download="" style="font-size: 14px">Download resume</a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th style="width: 20%">Short biography</th>
                            <td>
                                @if($user->profile)
                                    <div style="font-size: 14px">{!! $user->profile->biography !!}</div>
                                @endif
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-0">
                    <table class="table table-striped projects">
                        <thead>
                        <tr>
                            <th>
                                Language from
                            </th>
                            <th>
                                Language to
                            </th>
                            <th>
                                Slow:
                            </th>
                            <th >
                                Standard:
                            </th>
                            <th>
                                Urgent:
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @if(count($user->languages)>0)
                                @foreach($user->languages as $item)
                                    <tr>
                                        <td>{{ $item->langFrom->name }}</td>
                                        <td>{{ $item->langTo->name }}</td>
                                        <td>{{ $item->slow }}</td>
                                        <td>{{ $item->standard }}</td>
                                        <td>{{ $item->urgent }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.col -->
    </div>
@endsection
