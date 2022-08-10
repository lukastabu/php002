<div class="card">
    <div class="card-header">
        SORT FILTER SEARCH
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="">
                    <form class="" action="{{ route('front-index') }}" method="GET">
                        <label>Sort by</label>
                        <select name="sort">
                            <option value="default" @if ($sort == 'default') selected @endif>Recommended
                            </option>
                            <option value="color-asc" @if ($sort == 'color-asc') selected @endif>Color A-Z
                            </option>
                            <option value="color-desc" @if ($sort == 'color-desc') selected @endif>Color Z-A
                            </option>
                            <option value="animal-asc" @if ($sort == 'animal-asc') selected @endif>Animal A-Z
                            </option>
                            <option value="animal-desc" @if ($sort == 'animal-desc') selected @endif>Animal Z-A
                            </option>
                            <option value="height-asc" @if ($sort == 'height-asc') selected @endif>Height min-max
                            </option>
                            <option value="height-desc" @if ($sort == 'height-desc') selected @endif>Height max-min
                            </option>
                        </select>
                        <button class="btn btn-outline-info ml-1" type="submit">Sort</button>
                        <div>
                            <select name="color_id">
                                <option value="0" @if ($filter == 0) selected @endif></option>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}"
                                        @if ($filter == $color->id) selected @endif>{{ $color->name }}</option>
                                @endforeach
                            </select>
                            <button class="btn btn-outline-success" type="submit">Filter</button>
                        </div>
                        <a class="btn btn-outline-danger" href="{{ route('front-index') }}">Reset</a>
                    </form>
                </div>
            </div>
        </div>

        <form class="" action="{{ route('front-index') }}" method="GET">
            <div class="container">
                <div class="row">
                    <div class="">
                    <label>Search by keyword:</label>
                    <input class="" type="text" name="ssearch" value="{{$ssearch}}"/>
                    </div>
                </div>
                <button class="btn btn-outline-success" type="submit">Find</button>

            </div>
        </form>
    </div>
</div>
