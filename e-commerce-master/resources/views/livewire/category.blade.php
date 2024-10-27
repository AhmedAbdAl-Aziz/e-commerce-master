<div>
    <div class="form-group">
        <h3>Category</h3>
        <div class="form-group">
            <select class="form-control" name="category_name" wire:model="selectedCategory">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">{{ $category['id'] }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="details">
        <div class="section-head">
            <h4>Details</h4>
        </div>
        @if ($selectedCategory)
            <ul>
                <h3>Model Name</h3>
                <input id="inputText5" type="text"
                    class="form-control"
                    name="details[Model Name]">
                @foreach ($features as $key => $feature)
                    <h3>{{ $key }} <select class="form-control" name="details[{{ $key }}]">
                            <option value="">Select {{ $key }}</option>
                            @foreach ($feature as $value)
                                <option value="{{ $value }}"
                                    name="{{ $value }}">{{ $value }}
                                </option>
                            @endforeach
                        </select></h3>
                @endforeach
            </ul>
        @endif

    </div>
</div>
