<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neem contact met ons op - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.0/maps/maps.css"
    />
    <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.14.0/services/services-web.min.js"></script>
    <link rel="stylesheet" href="{{ url('css/contact.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/map.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="hero-section">
             <!-- Map container -->
            <div id='map' class='map'>
                <div id='foldable' class='tt-overlay-panel -left-top -medium js-foldable'>
                    <form id="form">
                    
                        <div id="startSearchBox" class="searchbox-container">
                            <div class="tt-icon tt-icon-size icon-spacing-right -start"></div>
                            <div class="tt-search-box">
                                <div class="tt-search-box-input-container">
                                    <div class="tt-searchbox-filter-label" style="display: none;">
                                        <div class="tt-searchbox-filter-label__text"></div>
                                        <div class="tt-searchbox-filter-label__close-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                                                <path d="M15.512418,11.5 L19.9637666,7.28870352 C20.1223719,7.13865149 20.1223719,6.89512441 19.9637666,6.74507238 L18.2390424,5.11253903 C18.0795704,4.96248699 17.8221618,4.96248699 17.6635565,5.11253903 L13.2122078,9.3238355 L8.7608592,5.11253903 C8.68545669,5.04120281 8.58145321,5.00020499 8.47398296,5.00020499 C8.36564601,5.00020499 8.26250923,5.04120281 8.18624002,5.11253903 L6.46064906,6.74507238 C6.38437985,6.81722855 6.34191176,6.91480337 6.34191176,7.01729793 C6.34191176,7.11979249 6.38437985,7.21736731 6.46064906,7.28952348 L10.9119977,11.5 L6.46064906,15.7112965 C6.38437985,15.7834526 6.34191176,15.8810275 6.34191176,15.9827021 C6.34191176,16.0851966 6.38437985,16.1827715 6.46064906,16.2549276 L8.18624002,17.887461 C8.26250923,17.9596171 8.36564601,17.999795 8.47398296,17.999795 C8.58145321,17.999795 8.68545669,17.9596171 8.7608592,17.887461 L13.2122078,13.6761645 L17.6635565,17.887461 C17.8221618,18.037513 18.0795704,18.037513 18.2390424,17.887461 L19.9637666,16.2549276 C20.1223719,16.1048756 20.1223719,15.8613485 19.9637666,15.7112965 L15.512418,11.5 Z" transform="translate(-5.544 -5)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="tt-search-box-input" placeholder="Query e.g. Washington">
                                    <div class="my-location-button"></div>
                                </div>
                            
                                <div class="tt-search-box-result-list-container" hidden="true"></div>
                            </div>
                        </div>
                
                        <div id="finishSearchBox" class="searchbox-container">
                            <div class="tt-icon tt-icon-size icon-spacing-right -finish"></div>
                            <div class="tt-search-box">
                                <div class="tt-search-box-input-container">
                                    <div class="tt-searchbox-filter-label" style="display: none;">
                                        <div class="tt-searchbox-filter-label__text"></div>
                                        <div class="tt-searchbox-filter-label__close-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                                                <path d="M15.512418,11.5 L19.9637666,7.28870352 C20.1223719,7.13865149 20.1223719,6.89512441 19.9637666,6.74507238 L18.2390424,5.11253903 C18.0795704,4.96248699 17.8221618,4.96248699 17.6635565,5.11253903 L13.2122078,9.3238355 L8.7608592,5.11253903 C8.68545669,5.04120281 8.58145321,5.00020499 8.47398296,5.00020499 C8.36564601,5.00020499 8.26250923,5.04120281 8.18624002,5.11253903 L6.46064906,6.74507238 C6.38437985,6.81722855 6.34191176,6.91480337 6.34191176,7.01729793 C6.34191176,7.11979249 6.38437985,7.21736731 6.46064906,7.28952348 L10.9119977,11.5 L6.46064906,15.7112965 C6.38437985,15.7834526 6.34191176,15.8810275 6.34191176,15.9827021 C6.34191176,16.0851966 6.38437985,16.1827715 6.46064906,16.2549276 L8.18624002,17.887461 C8.26250923,17.9596171 8.36564601,17.999795 8.47398296,17.999795 C8.58145321,17.999795 8.68545669,17.9596171 8.7608592,17.887461 L13.2122078,13.6761645 L17.6635565,17.887461 C17.8221618,18.037513 18.0795704,18.037513 18.2390424,17.887461 L19.9637666,16.2549276 C20.1223719,16.1048756 20.1223719,15.8613485 19.9637666,15.7112965 L15.512418,11.5 Z" transform="translate(-5.544 -5)"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <input class="tt-search-box-input" placeholder="Query e.g. Washington">
                                    <div class="tt-search-box-close-icon -hidden">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="13" viewBox="0 0 15 13">
                                            <path d="M15.512418,11.5 L19.9637666,7.28870352 C20.1223719,7.13865149 20.1223719,6.89512441 19.9637666,6.74507238 L18.2390424,5.11253903 C18.0795704,4.96248699 17.8221618,4.96248699 17.6635565,5.11253903 L13.2122078,9.3238355 L8.7608592,5.11253903 C8.68545669,5.04120281 8.58145321,5.00020499 8.47398296,5.00020499 C8.36564601,5.00020499 8.26250923,5.04120281 8.18624002,5.11253903 L6.46064906,6.74507238 C6.38437985,6.81722855 6.34191176,6.91480337 6.34191176,7.01729793 C6.34191176,7.11979249 6.38437985,7.21736731 6.46064906,7.28952348 L10.9119977,11.5 L6.46064906,15.7112965 C6.38437985,15.7834526 6.34191176,15.8810275 6.34191176,15.9827021 C6.34191176,16.0851966 6.38437985,16.1827715 6.46064906,16.2549276 L8.18624002,17.887461 C8.26250923,17.9596171 8.36564601,17.999795 8.47398296,17.999795 C8.58145321,17.999795 8.68545669,17.9596171 8.7608592,17.887461 L13.2122078,13.6761645 L17.6635565,17.887461 C17.8221618,18.037513 18.0795704,18.037513 18.2390424,17.887461 L19.9637666,16.2549276 C20.1223719,16.1048756 20.1223719,15.8613485 19.9637666,15.7112965 L15.512418,11.5 Z" transform="translate(-5.544 -5)"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="tt-search-box-result-list-container" hidden="true"></div>
                            </div>
                        </div>
                    </form>
                    
                    
                </div>
            </div>
        </div>

        <div class="information-section">
            <div class="contact-information">
                <div class="card-contact">
                    <h3>{{ GoogleTranslate::trans('Klantenservice', app()->getLocale()) }}</h3>
                    <p>Mail: info@groenevingersshop.com</p>
                    <p>Tel: 06-33024999</p>
                    </br>
                    <a href="mailto:info@groenevingersshop.com" class="contact-button">{{ GoogleTranslate::trans('Neem contact op', app()->getLocale()) }}</a>
                    
                </div>
            </div>
            <div class="picture">
                <img src="{{ url('assets/images/GroenePand.jpg') }}" alt="locatie" />
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>

<script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.1/maps/maps-web.min.js'></script>
    <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.25.1/services/services-web.min.js'></script>
    <script type='text/javascript' src='{{ url('javascript/map/mobile-or-tablet.js') }}'></script>
    <script type='text/javascript' src='{{ url('javascript/map/info-hint.js') }}'></script>
    <script type='text/javascript' src='{{ url('javascript/map/search/searchbox-enter-submit.js') }}'></script>
    <script type='text/javascript' src='{{ url('javascript/map/foldable.js') }}'></script>
    <script>
        var map = tt.map({
            key: 'm4QRBkItT4yj4Zpg1fHv7yqdZBGq7gVT',
            container: 'map',
            dragPan: !window.isMobileOrTablet(),
            center: [5.543190926093243, 51.46210505968836],
            zoom: 13
        });

        function createMarker(icon, position, color, popupText) {
            var markerElement = document.createElement('div');
            markerElement.className = 'marker';

            var markerContentElement = document.createElement('div');
            markerContentElement.className = 'marker-content';
            markerContentElement.style.backgroundColor = color;
            markerElement.appendChild(markerContentElement);

            var iconElement = document.createElement('div');
            iconElement.className = 'marker-icon';
            iconElement.style.backgroundImage =
                'url(https://api.tomtom.com/maps-sdk-for-web/cdn/static/' + icon + ')';
            markerContentElement.appendChild(iconElement);

            var popup = new tt.Popup({offset: 30}).setText(popupText);
            // add marker to map
            new tt.Marker({element: markerElement, anchor: 'bottom'})
                .setLngLat(position)
                .setPopup(popup)
                .addTo(map);
        }

        createMarker('accident.colors-white.svg', [5.534008932407582, 51.469172997430434], '#45A0CB', 'Groenevingers');
        createMarker('accident.colors-white.svg', [5.552663391299532, 51.45318241457581], '#48A240', 'Groenevingers');

        map.addControl(new tt.FullscreenControl());
        map.addControl(new tt.NavigationControl());
        new Foldable('#foldable', 'top-right');

        var bounds = new tt.LngLatBounds();

        function RoutingAB() {
            this.state = {
                start: undefined,
                finish: undefined,
                marker: {
                    start: undefined,
                    finish: undefined
                }
            };

            this.startSearchbox = this.createSearchBox('start');
            this.createSearchBox('finish');

            this.closeButton = document.querySelector('.tt-search-box-close-icon');
            this.startSearchboxInput = this.startSearchbox.getSearchBoxHTML().querySelector('.tt-search-box-input');

            this.startSearchboxInput.addEventListener('input', this.handleSearchboxInputChange.bind(this));

            this.createMyLocationButton();
            this.switchToMyLocationButton();

            this.errorHint = new InfoHint('error', 'bottom-center', 5000)
                .addTo(document.getElementById('map'));
        }

        RoutingAB.prototype.createMyLocationButton = function() {
            this.upperSearchboxIcon = document.createElement('div');
            this.upperSearchboxIcon.setAttribute('class', 'my-location-button');

            this.upperSearchboxIcon.addEventListener('click', function() {
                navigator.geolocation.getCurrentPosition(
                    this.reverseGeocodeCurrentPosition.bind(this),
                    this.handleError.bind(this)
                );
            }.bind(this));
        };

        RoutingAB.prototype.handleSearchboxInputChange = function(event) {
            var inputContent = event.target.value;

            if (inputContent.length > 0) {
                this.setCloseButton();
            } else {
                var resultList = this.startSearchbox.getSearchBoxHTML().querySelector('.tt-search-box-result-list');

                if (resultList || inputContent.length === 0) {
                    return;
                }

                this.onResultCleared('start');
            }
        };

        RoutingAB.prototype.reverseGeocodeCurrentPosition = function(position) {
            this.state.start = [position.coords.longitude, position.coords.latitude];

            tt.services.reverseGeocode({
                key: 'm4QRBkItT4yj4Zpg1fHv7yqdZBGq7gVT',
                position: this.state.start
            })
                .then(this.handleRevGeoResponse.bind(this))
                .catch(this.handleError.bind(this));
        };

        RoutingAB.prototype.handleRevGeoResponse = function(response) {
            var place = response.addresses[0];
            this.state.start = [place.position.lng, place.position.lat];
            this.startSearchbox.setValue(place.address.freeformAddress);
            this.onResultSelected(place, 'start');
        };

        RoutingAB.prototype.calculateRoute = function() {
            if (map.getLayer('route')) {
                map.removeLayer('route');
                map.removeSource('route');
            }

            if (!this.state.start || !this.state.finish) {
                return;
            }
            this.errorHint.hide();
            var startPos = this.state.start.join(',');
            var finalPos = this.state.finish.join(',');

            tt.services.calculateRoute({
                key: 'm4QRBkItT4yj4Zpg1fHv7yqdZBGq7gVT',
                traffic: false,
                locations: startPos + ':' + finalPos
            })
                .then(function(response) {
                    var geojson = response.toGeoJson();
                    map.addLayer({
                        'id': 'route',
                        'type': 'line',
                        'source': {
                            'type': 'geojson',
                            'data': geojson
                        },
                        'paint': {
                            'line-color': '#2faaff',
                            'line-width': 8
                        }
                    }, this.findFirstBuildingLayerId());

                    var coordinates = geojson.features[0].geometry.coordinates;
                    this.updateRoutesBounds(coordinates);
                }.bind(this))
                .catch(this.handleError.bind(this));
        };

        RoutingAB.prototype.handleError = function(error) {
            this.errorHint.setErrorMessage(error);
        };

        RoutingAB.prototype.drawMarker = function(type, viewport) {
            if (this.state.marker[type]) {
                this.state.marker[type].remove();
            }

            var marker = document.createElement('div');
            var innerElement = document.createElement('div');

            marker.className = 'route-marker';
            innerElement.className = 'icon tt-icon -white -' + type;
            marker.appendChild(innerElement);

            this.state.marker[type] = new tt.Marker({ element: marker })
                .setLngLat(this.state[type])
                .addTo(map);

            this.updateBounds(viewport);
        };

        RoutingAB.prototype.updateBounds = function(viewport) {
            bounds = new tt.LngLatBounds();

            if (this.state.start) {
                bounds.extend(tt.LngLat.convert(this.state.start));
            }
            if (this.state.finish) {
                bounds.extend(tt.LngLat.convert(this.state.finish));
            }

            if (viewport) {
                bounds.extend(tt.LngLat.convert(viewport.topLeftPoint));
                bounds.extend(tt.LngLat.convert(viewport.btmRightPoint));
            }

            if (!bounds.isEmpty()) {
                map.fitBounds(bounds, { duration: 0, padding: 50 });
            }
        };

        RoutingAB.prototype.updateRoutesBounds = function(coordinates) {
            bounds = new tt.LngLatBounds();

            coordinates.forEach(function(point) {
                bounds.extend(tt.LngLat.convert(point));
            });

            if (!bounds.isEmpty()) {
                map.fitBounds(bounds, { duration: 0, padding: 50 });
            }
        };

        RoutingAB.prototype.createSearchBox = function(type) {
            var searchBox = new tt.plugins.SearchBox(tt.services, {
                showSearchButton: false,
                searchOptions: {
                    key: 'm4QRBkItT4yj4Zpg1fHv7yqdZBGq7gVT'
                },
                labels: {
                    placeholder: 'Query e.g. Washington'
                }
            });
            document.getElementById(type + 'SearchBox').appendChild(searchBox.getSearchBoxHTML());

            searchBox.on('tomtom.searchbox.resultsfound', function(event) {
                handleEnterSubmit(event, this.onResultSelected.bind(this), this.errorHint, type);
            }.bind(this));

            searchBox.on('tomtom.searchbox.resultselected', function(event) {
                if (event.data && event.data.result) {
                    this.onResultSelected(event.data.result, type);
                }
            }.bind(this));
            searchBox.on('tomtom.searchbox.resultscleared', this.onResultCleared.bind(this, type));

            return searchBox;
        };

        RoutingAB.prototype.onResultSelected = function(result, type) {
            var pos = result.position;
            this.state[type] = [pos.lng, pos.lat];

            if (type === 'start') {
                this.setCloseButton();
            }

            this.drawMarker(type, result.viewport);
            this.calculateRoute();
        };

        RoutingAB.prototype.onResultCleared = function(type) {
            this.state[type] = undefined;

            if (this.state.marker[type]) {
                this.state.marker[type].remove();
                this.updateBounds();
            }
            if (type === 'start') {
                this.switchToMyLocationButton();
            }

            this.calculateRoute();
        };

        RoutingAB.prototype.setCloseButton = function() {
            var inputContainer = document.querySelector('.tt-search-box-input-container');
            this.closeButton.classList.remove('-hidden');

            if (document.querySelector('.my-location-button')) {
                inputContainer.replaceChild(this.closeButton, this.upperSearchboxIcon);
            }
        };

        RoutingAB.prototype.switchToMyLocationButton = function() {
            var inputContainer = document.querySelector('.tt-search-box-input-container');
            inputContainer.replaceChild(this.upperSearchboxIcon, this.closeButton);
        };

        RoutingAB.prototype.findFirstBuildingLayerId = function() {
            var layers = map.getStyle().layers;
            for (var index in layers) {
                if (layers[index].type === 'fill-extrusion') {
                    return layers[index].id;
                }
            }

            throw new Error('Map style does not contain any layer with fill-extrusion type.');
        };

        new RoutingAB();
    </script>
</body>
</html>