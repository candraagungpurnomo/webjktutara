var wms_layers = [];

var format_ADMINISTRASIKECAMATAN_AR_25K_0 = new ol.format.GeoJSON();
var features_ADMINISTRASIKECAMATAN_AR_25K_0 = format_ADMINISTRASIKECAMATAN_AR_25K_0.readFeatures(json_ADMINISTRASIKECAMATAN_AR_25K_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_ADMINISTRASIKECAMATAN_AR_25K_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_ADMINISTRASIKECAMATAN_AR_25K_0.addFeatures(features_ADMINISTRASIKECAMATAN_AR_25K_0);
var lyr_ADMINISTRASIKECAMATAN_AR_25K_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_ADMINISTRASIKECAMATAN_AR_25K_0, 
                style: style_ADMINISTRASIKECAMATAN_AR_25K_0,
                interactive: true,
    title: 'ADMINISTRASIKECAMATAN_AR_25K<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_25K_0_0.png" /> 7733 - 10690<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_25K_0_1.png" /> 10690 - 10714<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_25K_0_2.png" /> 10714 - 13992<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_25K_0_3.png" /> 13992 - 17499<br />\
    <img src="styles/legend/ADMINISTRASIKECAMATAN_AR_25K_0_4.png" /> 17499 - 25844<br />'
        });

lyr_ADMINISTRASIKECAMATAN_AR_25K_0.setVisible(true);
var layersList = [lyr_ADMINISTRASIKECAMATAN_AR_25K_0];
lyr_ADMINISTRASIKECAMATAN_AR_25K_0.set('fieldAliases', {'KDPPUM': 'KDPPUM', 'NAMOBJ': 'NAMOBJ', 'REMARK': 'REMARK', 'KDPBPS': 'KDPBPS', 'FCODE': 'FCODE', 'LUASWH': 'LUASWH', 'UUPP': 'UUPP', 'SRS_ID': 'SRS_ID', 'LCODE': 'LCODE', 'METADATA': 'METADATA', 'KDEBPS': 'KDEBPS', 'KDEPUM': 'KDEPUM', 'KDCBPS': 'KDCBPS', 'KDCPUM': 'KDCPUM', 'KDBBPS': 'KDBBPS', 'KDBPUM': 'KDBPUM', 'WADMKD': 'WADMKD', 'WIADKD': 'WIADKD', 'WADMKC': 'WADMKC', 'WIADKC': 'WIADKC', 'WADMKK': 'WADMKK', 'WIADKK': 'WIADKK', 'WADMPR': 'WADMPR', 'WIADPR': 'WIADPR', 'TIPADM': 'TIPADM', 'SHAPE_Leng': 'SHAPE_Leng', 'SHAPE_Area': 'SHAPE_Area', 'Jumlah Kepadatan Penduduk': 'Jumlah Kepadatan Penduduk', });
lyr_ADMINISTRASIKECAMATAN_AR_25K_0.set('fieldImages', {'KDPPUM': 'TextEdit', 'NAMOBJ': 'TextEdit', 'REMARK': 'TextEdit', 'KDPBPS': 'TextEdit', 'FCODE': 'TextEdit', 'LUASWH': 'TextEdit', 'UUPP': 'TextEdit', 'SRS_ID': 'TextEdit', 'LCODE': 'TextEdit', 'METADATA': 'TextEdit', 'KDEBPS': 'TextEdit', 'KDEPUM': 'TextEdit', 'KDCBPS': 'TextEdit', 'KDCPUM': 'TextEdit', 'KDBBPS': 'TextEdit', 'KDBPUM': 'TextEdit', 'WADMKD': 'TextEdit', 'WIADKD': 'TextEdit', 'WADMKC': 'TextEdit', 'WIADKC': 'TextEdit', 'WADMKK': 'TextEdit', 'WIADKK': 'TextEdit', 'WADMPR': 'TextEdit', 'WIADPR': 'TextEdit', 'TIPADM': 'Range', 'SHAPE_Leng': 'TextEdit', 'SHAPE_Area': 'TextEdit', 'Jumlah Kepadatan Penduduk': 'Range', });
lyr_ADMINISTRASIKECAMATAN_AR_25K_0.set('fieldLabels', {'KDPPUM': 'no label', 'NAMOBJ': 'inline label', 'REMARK': 'inline label', 'KDPBPS': 'no label', 'FCODE': 'no label', 'LUASWH': 'no label', 'UUPP': 'no label', 'SRS_ID': 'no label', 'LCODE': 'inline label', 'METADATA': 'no label', 'KDEBPS': 'no label', 'KDEPUM': 'no label', 'KDCBPS': 'no label', 'KDCPUM': 'no label', 'KDBBPS': 'no label', 'KDBPUM': 'no label', 'WADMKD': 'no label', 'WIADKD': 'no label', 'WADMKC': 'no label', 'WIADKC': 'no label', 'WADMKK': 'inline label', 'WIADKK': 'no label', 'WADMPR': 'inline label', 'WIADPR': 'no label', 'TIPADM': 'no label', 'SHAPE_Leng': 'inline label', 'SHAPE_Area': 'inline label', 'Jumlah Kepadatan Penduduk': 'inline label', });
lyr_ADMINISTRASIKECAMATAN_AR_25K_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});