<div>
    <div class="section-title-01 honmob">
        <div class="bg_parallax image_01_parallax"></div>
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Change Location</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>/</li>
                        <li>Change Location</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="content-central">
        <div class="semiboxshadow text-center">
            <img src="{{ asset('img/img-theme/shp.png') }}" class="img-responsive" alt="">
        </div>
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row">
                        <form wire:submit.prevent="changeLocation">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                            @endif

                            <div class="col-md-8">
                                <h3>Search Your Location</h3>
                                <p class="lead">
                                </p>
                                <input type="text" class="form-control" id="autocomplete" name="location"
                                       placeholder="Search Location....">
                                <div id="map" style="height: 400px;"></div>
                            </div>
                            <div class="col-md-4">
                                <aside class="addlocation">
                                    <h4>Your Location
                                        <input type="submit" class="btn btn-primary pull-right"
                                                            name="submit" model="Add Location">
                                    </h4>
                                    <address>
                                        <div class="form-group">
                                            <label for="streetNumber" class="col-form-label">Street Number:</label>
                                            <input type="text" class="form-control" id="streetNumber"
                                                   name="streetNumber" wire:model="streetNumber">
                                        </div>
                                        <div class="form-group">
                                            <label for="routes" class="col-form-label">Route:</label>
                                            <input type="text" class="form-control" id="routes" name="routes" wire:model="routes">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="col-form-label">City:</label>
                                            <input type="text" class="form-control" id="city" name="city" wire:model="city">
                                        </div>
                                        <div class="form-group">
                                            <label for="state" class="col-form-label">State:</label>
                                            <input type="text" class="form-control" id="state"
                                                   name="state" wire:model="state">
                                        </div>
                                        <div class="form-group">
                                            <label for="country" class="col-form-label">Country:</label>
                                            <input type="text" class="form-control" id="country" name="country" wire:model="country">
                                        </div>
                                        <div class="form-group">
                                            <label for="zipCode" class="col-form-label">zipCode:</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" wire:model="zipCode">
                                        </div>
                                    </address>
                                </aside>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-twitter content_resalt border-top">
            <i class="fa fa-twitter icon-big"></i>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
