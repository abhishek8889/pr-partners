@extends('admin_layout/master')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Package Bundel List</h4>
            <div class="nk-block-des">
                <p><code class="code-class"></code> </p>
            </div>
        </div>
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init nowrap nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                <thead>
                   
                    <tr class="nk-tb-item nk-tb-head">
                        <th class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div>
                        </th>
                        <th class="nk-tb-col"><span class="sub-text">Title</span></th>
                        <th class="nk-tb-col tb-col-mb"><span class="sub-text">Bundel Price</span></th>
                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Retail Price</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Category</span></th>
                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Publication</span></th>
                        <th class="nk-tb-col nk-tb-col-tools text-end">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                
                @for ($i = 0; $i < count($packageBundles); $i++)
                      
                    <tr class="nk-tb-item">
                        <td class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </td>
                        <td class="nk-tb-col">
                            <div class="user-card">
                                <div class="user-info">
                                  <a href="{{ $packageBundles[$i]['url'] ?? ''}}">  <span class="tb-lead">{{ $packageBundles[$i]['title'] ?? ''}}<span class="dot dot-success d-md-none ms-1"></span></span></a>
                                </div>
                            </div>
                        </td>

                        <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                            <span class="tb-amount">{{ $packageBundles[$i]['bundle_price'] ?? ''}}<span class="currency"><b> $</b></span></span>
                        </td>
                        <td class="nk-tb-col tb-col-md">
                            <span>{{ $packageBundles[$i]['retail_price'] ?? ''}}</span>
                        </td>
                        <td class="nk-tb-col tb-col-lg">
                            <ul class="list-status">
                                <?php
                                $genreIds = explode(',', $packageBundles[$i]['publication_id']);
                                $items = str_replace(['[', '"', ']'], '', $genreIds);
                                $genreNames = App\Models\Publication::whereIn('id', $items)->pluck('title')->toArray();
                                ?>

                                <li> <span>
                                   @for ($x = 0; $x < count($genreNames); $x++)
                                       {{ $genreNames[$x] ?? ''}} /
                                      <!-- <br> -->
                                      @if($x % 2 == 0)
                                        <br>
                                      @endif
                                   @endfor
                                </span></li>
                            </ul>
                        </td>
                        
                        <td class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                             </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </td>
                    </tr><!-- .nk-tb-item  --> 
                    @endfor
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div>
@endsection