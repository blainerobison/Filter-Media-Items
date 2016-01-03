<?php
/*
Plugin Name: Filter Media Items
Plugin URI: http://elevatoragency.com/
Description: Filter media library by additional file types.
Author: Blaine Robison
Version: 1.0.0
Author URI: http://blainerobison.net/
*/
function ev_additional_post_mime_types( $post_mime_types ) {

    $new_mime_types = array(
        'application/pdf'                                                                                                                                                                                                                                               => array( __( 'PDF' ), __( 'Manage PDFs' ), _n_noop( 'PDF <span class="count">(%s)</span>', 'PDFs <span class="count">(%s)</span>' ) ),
        'text/csv, text/tab-separated-values, application/vnd.ms-excel, application/vnd.ms-excel.sheet.binary.macroEnabled.12, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.spreadsheetml.template' => array( __( 'Spreadsheet' ), __( 'Manage Spreadsheets' ), _n_noop( 'Spreadsheet <span class="count">(%s)</span>', 'Spreadsheets <span class="count">(%s)</span>' ) ),
        'application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/vnd.openxmlformats-officedocument.wordprocessingml.template'                                                                                          => array( __( 'Word Doc' ), __( 'Manage Word Docs' ), _n_noop( 'Word Doc <span class="count">(%s)</span>', 'Word Docs <span class="count">(%s)</span>' ) ),
        'application/x-zip-compressed, application/zip, multipart/x-zip'                                                                                                                                                                                                => array( __( 'Zip' ), __( 'Manage Zip Files' ), _n_noop( 'Zip <span class="count">(%s)</span>', 'Zip Files <span class="count">(%s)</span>' ) ),
    );

    // combine new mime types with existing
    return array_merge( $post_mime_types, $new_mime_types );

}
add_filter( 'post_mime_types', 'ev_additional_post_mime_types' );
