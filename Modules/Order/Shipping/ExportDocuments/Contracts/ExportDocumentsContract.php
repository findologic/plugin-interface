<?php
namespace Plenty\Modules\Order\Shipping\ExportDocuments\Contracts;

use Plenty\Modules\Order\Shipping\ExportDocuments\Models\ExportDocument;

/**
 * The ExportDocumentsContract
 */
interface ExportDocumentsContract 
{

	/**
	 * List export documents by order ID
	 */
	public function listExportDocumentsByOrderId(
		int $orderId
	):ExportDocument;

}