<div class="taxonomy-filter filter-input">
    <h6>{{ ($taxonomyFilterLabels[$filter]?:'') }}</h6>
    <select class="bs-multiselect" name="{{ $filter }}" multiple multiselect-config='{"numberDisplayed":1}'>
        <option value="" class="default">{{ ($filterDefaultLabels[$filter]?:'All') }}</option>

        <optgroup label="After school programs">    
            @foreach($options['programs'] as $option)
                <option value="{{ $option['key'] }}" {{ in_array($option['key'], isset($defaultFilters[$filter])?$defaultFilters[$filter]:[])?'selected':'' }}>{{ $option['value'] }}</option>
            @endforeach
        </optgroup>
        <optgroup label="Camps">  
            @foreach($options['camps'] as $option)
                <option value="{{ $option['key'] }}" {{ in_array($option['key'], isset($defaultFilters[$filter])?$defaultFilters[$filter]:[])?'selected':'' }}>{{ $option['value'] }}</option>
            @endforeach
        </optgroup>
        
    </select>
</div>