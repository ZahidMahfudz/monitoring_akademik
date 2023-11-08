@extends('layout')
@section('content')
<!-- <div class="row page-titles mx-0">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dosenwali/verification">Verifikasi Mahasiswa</a></li>
            <li class="breadcrumb-item active"><a href="javascript:void(0)">Verification</a></li>
        </ol>
    </div>
</div>
row -->

<div class="container-fluid">
    <div class="table-responsive">
        <table class="table header-border">
            <thead>
            <h1>Verifikasi Mahasiswa</h1>
                <tr>
                    <th style="text-align: center;">Nama</th>
                    <th style="text-align: center;">NIM</th>
                    <th style="text-align: center;">Semester</th>
                    <th style="text-align: center;">SKS</th>
                    <th style="text-align: center;">Scan IRS</th>
                    <th style="text-align: center;">Approval</th>
                    <th style="text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($irs as $irs)
                <tr>
                    <td style="text-align: center;">{{ $irs->nama }}</a></td>
                    <td style="text-align: center;">{{ $irs->nim }}</td>
                    <td style="text-align: center;"><span class="text-muted">{{ $irs->semester }}</span></td>
                    <td style="text-align: center;">{{ $irs->sks }}</td>
                    <td style="text-align: center;">
                        <a href="{{ $irs->scanirs }}">{{ $irs->scanirs }}</a>
                    </td>
                    @if ($irs->approve == 'SUDAH DISETUJUI')
                    <td style="text-align: center;">
                        <span class="label gradient-1 rounded">{{ $irs->approve }}</span>
                    </td>
                    @else
                    <td style="text-align: center;">
                        <span class="label gradient-2 rounded">{{ $irs->approve }}</span>
                    </td>
                    @endif
                    <td style="text-align: center;">
                        <form action="/dosenwali/verification/{{ $irs->nim }}/verify" method="post">
                            @csrf
                            @method('post')
                            <button type="submit" class="btn btn-danger px-5" @if ($irs->approve == 'SUDAH DISETUJUI') disabled @endif>
                                @if ($irs->approve == 'SUDAH DISETUJUI')
                                Sudah Verifikasi
                                @else
                                Verifikasi
                                @endif
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- #/ container -->
@endsection
