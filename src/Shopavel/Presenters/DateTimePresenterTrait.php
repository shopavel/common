<?php namespace Shopavel\Presenters;

/**
 * Trait to provide methods for formatting the timestamp properties as
 * localized datetime strings.
 *
 * @author Laurence Roberts <lsjroberts@outlook.com>
 */
trait DateTimePresenterTrait {

    public function created_at()
    {
        return $this->resource->created_at->formatLocalized('%c');
    }

    public function updated_at()
    {
        return $this->resource->updated_at->formatLocalized('%c');
    }

    public function deleted_at()
    {
        return $this->resource->deleted_at->formatLocalized('%c');
    }

}