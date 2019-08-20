<tr>
    <td style="width: 40px;">
       {{ $parentcategory->id }}
    </td>
    <td class="align-middle">
        {{ $parentcategory->name }}
    </td>
   
    
    <td class="text-center align-middle">
        <a href="{{ route('parentcat.edit', $parentcategory->id) }}"
           class="btn btn-icon edit"
           title="@lang('app.edit_parentcat')"
           data-toggle="tooltip" data-placement="top">
            <i class="fas fa-edit"></i>
        </a>
  
        <a href="{{ route('parentcat.del', $parentcategory->id) }}"
           class="btn btn-icon"
           title="@lang('app.delete_parentcat')"
           data-toggle="tooltip"
           data-placement="top"
           data-method="DELETE"
           data-confirm-title="@lang('app.please_confirm')"
           data-confirm-text="@lang('app.are_you_sure_delete_par_cat')"
           data-confirm-delete="@lang('app.yes_delete')">
           <i class="fas fa-trash"></i>
        </a>
    </td>
</tr>