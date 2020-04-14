
$(document).ready(function(){

    load_json_data('region');

    function load_json_data(id, parent_id)
    {
        var html_code = '';
        $.getJSON("{{ asset('templates/frontoffice/assets/js/info.json') }}", function(data){

            html_code += '<option value="">Select '+id+'</option>';
            $.each(data, function(key, value){
                if(id == 'region')
                {
                    if(value.parent_id == '0')
                    {
                        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                    }
                }
                else
                {
                    if(value.parent_id == parent_id)
                    {
                        html_code += '<option value="'+value.id+'">'+value.name+'</option>';
                    }
                }
            });
            $('#'+id).html(html_code);
        });

    }

    $(document).on('change', '#region', function(){
        var region_id = $(this).val();
        if(region_id != '')
        {
            load_json_data('point_vente', region_id);
        }
        else
        {
            $('#point_vente').html('<option value="">Choisir un point de vente</option>');
            $('#produit').html('<option value="">Choisir un produit</option>');
        }
    });
    $(document).on('change', '#point_vente', function(){
        var ptVente_id = $(this).val();
        if(ptVente_id != '')
        {
            load_json_data('produit', ptVente_id);
        }
        else
        {
            $('#produit').html('<option value="">Choisir un produit</option>');
        }
    });
});

