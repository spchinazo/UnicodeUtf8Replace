# UnicodeUtf8Replace
Ascii - Utf8 to Unicode

UnicodeUtf8Replace

Original
{"oficio":"","solped":"000000000","pos_financiera":"0000","fecha":"9999-99-99","fecha_sol":"9999-99-99","centro":"4410","zona":"MEXICO","fecha_libsol":"9999-99-99","fondo":"000","area":"XXX","monto_solped":"0000000.00","orden":"","entidad":"MEXICO","tipo_licitacion":"PUBLICA","obra":"OPERACI�N Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE L�NEAS Y REDES DE, DISTRIBUCI�N DE ENERGIA ELECTRICA, Y DE CONTROL EN EL �MBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCI�N VALLA DE M�XICO NORTE DE LA ZONA TLALNEPANTLA.","id_solicitud":"0"}

Resultado
{"oficio":"","solped":"000000000","pos_financiera":"0000","fecha":"9999-99-99","fecha_sol":"9999-99-99","centro":"4410","zona":"MEXICO","fecha_libsol":"9999-99-99","fondo":"000","area":"XXX","monto_solped":"0000000.00","orden":"","entidad":"MEXICO","tipo_licitacion":"PUBLICA","obra":"OPERACI\u00d3N Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE L\u00cdNEAS Y REDES DE, DISTRIBUCI\u00d3N DE ENERGIA ELECTRICA, Y DE CONTROL EN EL \u00c1MBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCI\u00d3N VALLA DE M\u00c9XICO NORTE DE LA ZONA TLALNEPANTLA.","id_solicitud":"0"}

jsonlint.com - Resultado
{ "oficio": "", "solped": "000000000", "pos_financiera": "0000", "fecha": "9999-99-99", "fecha_sol": "9999-99-99", "centro": "4410", "zona": "MEXICO", "fecha_libsol": "9999-99-99", "fondo": "000", "area": "XXX", "monto_solped": "0000000.00", "orden": "", "entidad": "MEXICO", "tipo_licitacion": "PUBLICA", "obra": "OPERACI\u00c3?N Y RESTABLECIMIENTO DE LA INFRAESTRUCTURA DE L\u00c3?NEAS Y REDES DE, DISTRIBUCI\u00c3?N DE ENERGIA ELECTRICA, Y DE CONTROL EN EL \u00c3?MBITO DE INFLUENCIA DE LA DIVISION DE DISTRIBUCI\u00c3?N VALLA DE M\u00c3?XICO NORTE DE LA ZONA TLALNEPANTLA.", "id_solicitud": "0" }
