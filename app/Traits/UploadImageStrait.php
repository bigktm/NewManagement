<?php

namespace App\Traits;
use Storage;
use Session;
trait UploadImageStrait {
	public function StorageImageUpload($request, $fieldName, $folderName) {

		if($request->hasFile($fieldName)) {

			$file = $request->$fieldName;

			$fileNameOrigin = $file->getClientOriginalName();
			$get_nameOrigin = current(explode('.', $fileNameOrigin));
			$fileNameHash = $get_nameOrigin.'_'.rand(0,99).'.'.$file->getClientOriginalExtension();
			$filePath = $request->file($fieldName)->storeAs('public/product/' . $folderName, $fileNameHash);
			$dataUpload = [
				'file_name' => $fileNameOrigin,
				'file_path' => Storage::url($filePath)
			];

			return $dataUpload;
		}
		return null;
	} 
	public function StorageImageUploadMultiple($file, $folderName) {
		$fileNameOrigin = $file->getClientOriginalName();
		$get_nameOrigin = current(explode('.', $fileNameOrigin));
		$fileNameHash = $get_nameOrigin.'_'.rand(0,99).'.'.$file->getClientOriginalExtension();
		$filePath = $file->storeAs('public/product-gallery/product_id_' . $folderName, $fileNameHash);
		$dataUpload = [
			'file_name' => $fileNameOrigin,
			'file_path' => Storage::url($filePath)
		];
		return $dataUpload;
	} 
}