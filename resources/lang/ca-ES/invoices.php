<?php

return [

    'invoice_number'        => 'Número de factura',
    'invoice_date'          => 'Data de facturació',
    'total_price'           => 'Preu total',
    'due_date'              => 'Data de venciment',
    'order_number'          => 'Número de comanda',
    'bill_to'               => 'Facturar a',

    'quantity'              => 'Quantitat',
    'price'                 => 'Preu',
    'sub_total'             => 'Subtotal',
    'discount'              => 'Descompte',
    'item_discount'         => 'Descompte sobre el preu de línia',
    'tax_total'             => 'Total impostos',
    'total'                 => 'Total',

    'item_name'             => 'Nom de l\'article|Nom dels articles',

    'show_discount'         => ':discount% de descompte',
    'add_discount'          => 'Afegeix descompte',
    'discount_desc'         => 'del subtotal',

    'payment_due'           => 'Data límit de pagament',
    'paid'                  => 'Pagat',
    'histories'             => 'Històries',
    'payments'              => 'Pagaments',
    'add_payment'           => 'Afegeix pagament',
    'mark_paid'             => 'Marca com a pagat',
    'mark_sent'             => 'Marca com enviat',
    'mark_viewed'           => 'Marca com a vist',
    'mark_cancelled'        => 'Marca com a cancel·lat',
    'download_pdf'          => 'Descarrega el PDF',
    'send_mail'             => 'Envia correu electrònic',
    'all_invoices'          => 'Registra\'t per veure les factures',
    'create_invoice'        => 'Crea factura',
    'send_invoice'          => 'Envia factura',
    'get_paid'              => 'Cobrament',
    'accept_payments'       => 'Accepta pagaments online',

    'statuses' => [
        'draft'             => 'Esborrany',
        'sent'              => 'Enviat',
        'viewed'            => 'Vist',
        'approved'          => 'Aprovat',
        'partial'           => 'Parcial',
        'paid'              => 'Pagat',
        'overdue'           => 'Vençut',
        'unpaid'            => 'Impagat',
        'cancelled'         => 'Cancel·lat',
    ],

    'messages' => [
        'email_sent'        => 'S\'ha enviat la factura per correu!',
        'marked_sent'       => 'S\'ha marcat la factura com enviada!',
        'marked_paid'       => 'S\'ha marcat la factura com pagada!',
        'marked_viewed'     => 'S\'ha marcat la factura com vista!',
        'marked_cancelled'  => 'S\'ha marcat la factura com cancel·lada!',
        'email_required'    => 'Aquest client no té adreça de correu electrònic!',
        'draft'             => 'Això és un <b>ESBORRANY</b> de factura i es reflectirà als gràfics un cop s\'hagi enviat.',

        'status' => [
            'created'       => 'Creada el :date',
            'viewed'        => 'Vist',
            'send' => [
                'draft'     => 'No s\'ha enviat',
                'sent'      => 'Enviat el :date',
            ],
            'paid' => [
                'await'     => 'Pagament pendent',
            ],
        ],
    ],

];
