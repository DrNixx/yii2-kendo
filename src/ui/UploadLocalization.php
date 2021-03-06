<?php

namespace kendo\ui;

use kendo\SerializableObject;

class UploadLocalization extends SerializableObject {

    /**
     * Sets the text of the cancel button text.
     * @param string $value
     * @return UploadLocalization
     */
    public function cancel($value) {
        return $this->setProperty('cancel', $value);
    }

    /**
     * Sets the drop zone hint.
     * @param string $value
     * @return UploadLocalization
     */
    public function dropFilesHere($value) {
        return $this->setProperty('dropFilesHere', $value);
    }

    /**
     * Sets the text of the remove button text.
     * @param string $value
     * @return UploadLocalization
     */
    public function remove($value) {
        return $this->setProperty('remove', $value);
    }

    /**
     * Sets the text of the retry button text.
     * @param string $value
     * @return UploadLocalization
     */
    public function retry($value) {
        return $this->setProperty('retry', $value);
    }

    /**
     * Sets the "Select..." button text.
     * @param string $value
     * @return UploadLocalization
     */
    public function select($value) {
        return $this->setProperty('select', $value);
    }

    /**
     * Sets the status message for failed uploads.
     * @param string $value
     * @return UploadLocalization
     */
    public function statusFailed($value) {
        return $this->setProperty('statusFailed', $value);
    }

    /**
     * Sets the status message for uploaded files.
     * @param string $value
     * @return UploadLocalization
     */
    public function statusUploaded($value) {
        return $this->setProperty('statusUploaded', $value);
    }

    /**
     * Sets the status message for files that are being uploaded.
     * @param string $value
     * @return UploadLocalization
     */
    public function statusUploading($value) {
        return $this->setProperty('statusUploading', $value);
    }

    /**
     * Sets the text of the "Upload files" button.
     * @param string $value
     * @return UploadLocalization
     */
    public function uploadSelectedFiles($value) {
        return $this->setProperty('uploadSelectedFiles', $value);
    }

}
