<?php
/**
 * Form Customization English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['action'] = 'Ação';
$_lang['action_desc'] = 'A Ação para qual esta regra irá se aplicar.';
$_lang['activate'] = 'Ativar';
$_lang['constraint'] = 'Limitador';
$_lang['constraint_class'] = 'Classe Limitadora';
$_lang['constraint_class_desc'] = 'Opcional. Se definido, juntamente com o Campo Limitador e opções de Limitador, irá restringir esta regra para os limites aplicados.';
$_lang['constraint_desc'] = 'Opcional. O valor do Campo Limitador deve ser marcado contra.';
$_lang['constraint_field'] = 'Campo Limitador';
$_lang['constraint_field_desc'] = 'Opcional. O campo onde o limitador deve ser aplicado.';
$_lang['containing_panel'] = 'Painel de Destino';
$_lang['containing_panel_desc'] = 'O ID do Painel de Destino onde o campo se encontra. Isto é necessário para algumas regras, para que o sistema saiba em qual painel de formulário o campo se encontra.';
$_lang['deactivate'] = 'Desativar';
$_lang['default_value'] = 'Valor Padrão';
$_lang['fc.action_create'] = 'Criar Recurso';
$_lang['fc.action_update'] = 'Edit Resource';
$_lang['fc.action_resource_wildcard'] = 'Create & Edit Resource';
$_lang['field'] = 'Campo';
$_lang['field_desc'] = 'Este é o campo para afetar. Isto também pode ser uma aba, ou VT. Se está em um VT, por favor especifique neste formato: "tv#", onde # é o ID do TV.';
$_lang['field_default'] = 'Valor Padrão do Campo';
$_lang['field_label'] = 'Rótulo do Campo';
$_lang['field_visible'] = 'Visibilidade do Campo';
$_lang['fields'] = 'Campos';
$_lang['file'] = 'Arquivo';
$_lang['filter_by_action'] = 'Filtrar por Ação...';
$_lang['filter_by_rule_type'] = 'Filtrar por Regra...';
$_lang['for_parent'] = 'Para o pai';
$_lang['for_parent_desc'] = 'Marque isso quando você quer que esta regra se aplique para o pai. Somente utilize Recuross ou objetos com um campo `pai`. Útil para o "criar" de página de Recurosos.';
$_lang['form_customization_msg'] = 'Here is a list of currently applied Rules. More information on Rules and Form Customization can be found <a href="https://docs.modx.com/3.x/en/building-sites/client-proofing/form-customization" target="_blank">here</a>. Please note that improper Rules might cause problems with your MODX Revolution installation. Inactive Rules are faded gray.';
$_lang['form_rules'] = 'Regras de Formulário';
$_lang['label'] = 'Rótulo';
$_lang['original_value'] = 'Valor Original';
$_lang['profile'] = 'Perfil';
$_lang['profile_err_nfs'] = 'Perfil de Personalização de Formulário não encontrado com o ID [[+id]].';
$_lang['profile_err_ns'] = 'Perfil de Personalização de Formulário não especicado!';
$_lang['profile_err_remove'] = 'An error occurred while trying to delete the Profile.';
$_lang['profile_err_save'] = 'Ocorreu um erro ao tentar salvar o Perfil.';
$_lang['profile_msg'] = 'Here you can specify Sets for this Profile. A Set is a collection of Rules that apply for a given page (Edit or Create Resource). They can also be restricted to certain Templates, or other field values on the Resource. Constraints for the Create Resource Sets will execute based on the parent of the newly created Resource\'s value.';
$_lang['profile_remove_confirm'] = 'Are you sure you want to completely delete this Profile? This is irreversible.';
$_lang['profile_remove_multiple_confirm'] = 'Are you sure you want to completely delete these Profiles? This is irreversible.';
$_lang['profile_usergroup_err_ae'] = 'Esse Grupo de Usuários já está atribuído a este perfil!.';
$_lang['profile_usergroups_msg'] = 'Aqui você pode atribuir a Grupos de Usuários que irão usar este Perfil. Se nenhum grupo de usuário são atribuídos, todos os usuários vão usar este Perfil.';
$_lang['profiles'] = 'Perfis de Personalização de Formulário';
$_lang['profiles_msg'] = 'Esta é uma lista dos seus Perfis de Formulários Personalizados. Os Perfis podem conter várias Regras de Personalização, e elas podem ser ativadas ou desativadas. As regras também pode ser configurado para só se aplicam a certos grupos de usuários.';
$_lang['rank'] = 'Posição';
$_lang['rank_desc'] = 'A ordem na qual a regra é executada. Um número mais baixo significa que ele será executado antes.';
$_lang['region'] = 'Região';
$_lang['regions'] = 'Regiões';
$_lang['rule'] = 'Regra';
$_lang['rule_create'] = 'Criar Regra';
$_lang['rule_desc'] = 'O tipo de regra que será aplicada para este campo.';
$_lang['rule_description_desc'] = 'Opcional. Uma descrição da regra.';
$_lang['rule_err_ae'] = 'Uma regra já existe para esse campo!';
$_lang['rule_err_duplicate'] = 'Ocorreu um erro durante a tentativa de duplicar a regra.';
$_lang['rule_err_nf'] = 'Regra não encontrada. ';
$_lang['rule_err_ns'] = 'Regra não especificada.';
$_lang['rule_err_remove'] = 'An error occurred while trying to delete the rule.';
$_lang['rule_err_save'] = 'Ocorreu um erro ao tentar salvar a regra.';
$_lang['rule_remove'] = 'Remover Regra';
$_lang['rule_remove_confirm'] = 'Are you sure you want to delete this Rule?';
$_lang['rule_remove_multiple'] = 'Excluir Várias Regras';
$_lang['rule_remove_multiple_confirm'] = 'Are you sure you want to delete these Rules? This is irreversible.';
$_lang['rule_update'] = 'Edit Rule';
$_lang['rule_value_desc'] = 'O valor a definir na Regra. ';
$_lang['rules'] = 'Regras';
$_lang['set'] = 'Definir';
$_lang['set_and_fields'] = 'Informações de Conjunto e de Campos';
$_lang['set_change_template'] = 'Alterar Modelo de Definição';
$_lang['set_change_template_confirm'] = 'Tem certeza que quer fazer isso? Isso vai mudar o modelo que estas regras se aplicam. Se assim for, MODx primeiro irá salvar suas alterações antes de recarregar a página para atualizar os novos VTs para o novo modelo.';
$_lang['set_constraint_field_desc'] = 'Definir o campo de restrição irá impedir as regras do presente Conjunto de execução, salvo o campo para esse recurso corresponde ao valor da "restrição" .';
$_lang['set_constraint_desc'] = 'Definir o valor do campo (especificado acima) para restringir as regras deste conjunto de serem executados a menos que o recurso tem esse valor no campo de restrição especificada.';
$_lang['set_err_nfs'] = 'Nenhum Set encontrou com ID [[+id]]';
$_lang['set_err_ns'] = 'Nenhum conjunto especificado.';
$_lang['set_fields_msg'] = 'Aqui você pode ajustar os campos para esta página, incluindo sua visibilidade, rótulos e valores padrão. Basta clicar duas vezes em uma linha para editar o seu valor. Deixe um campo vazio para usar a configuração padrão. <br>Por favor observe: escondendo um elemento dentro deste perfil, ele ficará oculto em nos perfis sobrepostos também (mesmo que marcado como Visível).';
$_lang['set_import_err_upload'] = 'Ocorreu um erro durante a tentativa de localizar o arquivo XML. Por favor, especifique um arquivo válido.';
$_lang['set_import_err_xml'] = 'Ocorreu um erro ao importar o arquivo XML. Certifique-se de que você especificou uma personalização forma válida Definir arquivo XML.';
$_lang['set_import_msg'] = 'Escolha um arquivo XML para importar um conjunto de personalização do formulário. Ele deve estar no formato correto Personalização de formulário XML.';
$_lang['set_import_template_err_nf'] = 'Template não encontrado enquanto importava Conjunto de Personalização de Formulário.';
$_lang['set_msg'] = 'Here you can edit what fields, tabs and TVs show for this page, as well as their labels and default values. Just double-click on a column to edit its value. You can also use the tab key to progress through the grid. Leave a field blank to use the default setting.';
$_lang['set_remove_confirm'] = 'Are you sure you want to permanently delete this set? This is irreversable.';
$_lang['set_remove_multiple_confirm'] = 'Are you sure you want to permanently delete these sets? This is irreversable.';
$_lang['set_tab_err_ae'] = 'Uma guia já existe com essa identificação. Por favor especifique outra.';
$_lang['set_tabs_msg'] = 'Aqui você ajustar as guias e regiões para esta página, incluindo sua visibilidade e o título. Basta clicar duas vezes em uma linha para editar o seu valor. Deixe um campo vazio para usar a configuração padrão. <br>Por favor observe: escondendo um elemento dentro deste perfil, ele ficará oculto em perfis sobrepostos também (mesmo que marcado como Visível).';
$_lang['set_template_desc'] = 'Escolher um modelo vai limitar as regras do Conjunto de execução, salvo o recurso tem o modelo especificado.';
$_lang['set_tvs_msg'] = 'Here you can set visibility, labels, default values and the tabs they reside in by double-clicking on the row in the grid. Note: If you move a <abbr title="Template Variable">TV</abbr> to another Region, you can adjust the order of the TV in the "Region Rank" field. Leave a field empty to use the default setting.';
$_lang['sets'] = 'Define Personalização de formulário';
$_lang['simplexml_err_nf'] = 'MODx requer a extensão PHP SimpleXML para usar este recurso. Verifique se a extensão é instalada, antes de continuar.';
$_lang['tab'] = 'Guia';
$_lang['tab_id'] = 'ID';
$_lang['tab_name'] = 'Nome da guia';
$_lang['tab_title'] = 'Título';
$_lang['tab_rank'] = 'Aba Rank';
$_lang['tab_remove_confirm'] = 'Tem certeza de que deseja remover esta conta?';
$_lang['tab_visible'] = 'Aba visível';
$_lang['tabs'] = 'Tabulações';
$_lang['tv'] = 'TV';
$_lang['tv_default'] = 'Valor padrão de VT';
$_lang['tv_label'] = 'Rótulo de VT';
$_lang['tv_name'] = 'Nome';
$_lang['tv_move'] = 'Mover VT para Guia';
$_lang['tv_visible'] = 'Visível TV';
$_lang['tvs'] = 'Variáveis de Template';
$_lang['usergroup'] = 'Grupo de Usuário';
$_lang['usergroup_create'] = 'Create User Group';
$_lang['usergroup_desc'] = 'Opcional. Se definido, irá restringir este perfil de usuários só no especificado User Group.';
$_lang['usergroup_remove'] = 'Delete User Group From Profile';
$_lang['usergroup_remove_confirm'] = 'Tem certeza que quer este perfil de não mais se aplicam aos usuários neste grupo de utilizadores?';
$_lang['usergroups'] = 'Grupos de usuários';
$_lang['visible'] = 'Visível';
$_lang['xmlwriter_err_nf'] = 'MODx XMLWriter requer a extensão PHP para usar este recurso. Verifique se a extensão está instalada, antes de continuar.';
