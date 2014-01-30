<?php namespace Shopavel\Presenters;

/**
 * Trait to provide methods for formatting the timestamp properties as
 * localized date strings.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
trait DatePresenterTrait {

    public function created_at()
    {
        return $this->resource->created_at->formatLocalized('%x');
    }

    public function updated_at()
    {
        return $this->resource->updated_at->formatLocalized('%x');
    }

    public function deleted_at()
    {
        return $this->resource->deleted_at->formatLocalized('%x');
    }

}