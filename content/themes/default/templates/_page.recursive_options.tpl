<option value="">No Page</option>
<option {if $data_page == $page['page_id']}selected style="font-weight: 600;" class="bg-info"{/if} value="{$page['page_id']}">
    {str_repeat("- - ", $page['iteration'])}{__($page['page_name']|truncate:30)}
</option>
{if $page['sub_categories']}
    {foreach $page['sub_categories'] as $_page}
        {include file='__categories.recursive_options.tpl' page = $_page}
    {/foreach}
{/if}