<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\User;
use App\Models\Combo;
use App\Http\Controllers\ComboController;

class UserController extends Controller
{
    private $route = 'users';

    public function __construct(ComboController $comboController)
    {
        $this->combo = $comboController;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actions = $this->getActions();
        $buttons = $this->getButtons();
        $combos  = $this->getCombos();
        $options = $this->getOptions();
        $options['page']['footer'] = true;

        $users = User::paginate($options['list']['paginated']);

        return view('users.index', [
            'users'     => $users,
            'actions'   => $actions,
            'buttons'   => $buttons,
            'combos'    => $combos,
            'options'   => $options
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|email|max:255|unique:users',
            'password' => 'required',
            'record_scope' => 'required',
        ]);

        $user = new User($request->except('token'));
        $user->save();

        return redirect()->route('users.index')
            ->with('success','User created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        Session::put('editableUser', $user->id);

        $actions = $this->getActions();
        $buttons = $this->getButtons();
        $combos  = $this->getCombos();
        $options = $this->getOptions();


        return view('users.edit', [
            'user'    => $user,
            'actions' => $actions,
            'buttons' => $buttons,
            'combos'  => $combos,
            'options' => $options
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required|email|unique:users,email,'.$user->id,
            'password' => 'required',
            'record_scope' => 'required',
        ]);

        $user->update($request->all());

        return redirect()->route('users.index')
            ->with('success','User updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->with('success','User deleted successfully.');
    }

    /**
     * Display a listing of the actions.
     *
     * @return \array
     */
    public function getActions()
    {
        $actions['form']['index']   = "$this->route.index";
        $actions['form']['store']   = "$this->route.store";
        $actions['form']['update']  = "$this->route.update";
        $actions['form']['destroy'] = "$this->route.destroy";

        return $actions;
    }

    /**
     * Display a listing of the buttons.
     *
     * @return \array
     */
    public function getButtons()
    {
        /**
         * Navigation actions
         */
        $buttons['home']['name']  = 'Inicio';
        $buttons['home']['link']  = 'home';
        $buttons['home']['icon']  = 'home';
        $buttons['home']['class'] = 'btn btn-light';
        $buttons['home']['color'] = '';

        $buttons['backHome']['name']  = 'Início';
        $buttons['backHome']['link']  = "home";
        $buttons['backHome']['icon']  = 'fas fa-chevron-left';
        $buttons['backHome']['class'] = 'btn btn-light';
        $buttons['backHome']['color'] = '';

        /**
         * FORM actions
         */
        $buttons['formCancel']['name']  = 'Cancelar';
        $buttons['formCancel']['link']  = "$this->route.index";
        $buttons['formCancel']['icon']  = 'fas fa-reply';
        $buttons['formCancel']['class'] = 'btn btn-light';
        $buttons['formCancel']['color'] = '';

        $buttons['formSave']['name']    = 'Salvar';
        $buttons['formSave']['link']    = "$this->route.store";
        $buttons['formSave']['icon']    = 'fas fa-save';
        $buttons['formSave']['class']   = 'btn btn-primary';
        $buttons['formSave']['color'] = '';

        /**
         * HEADER actions
         */
        $buttons['backIndex']['name']  = 'Voltar';
        $buttons['backIndex']['link']  = "$this->route.index";
        $buttons['backIndex']['icon']  = 'fas fa-chevron-left';
        $buttons['backIndex']['class'] = 'btn btn-light';
        $buttons['backIndex']['color'] = '';

        $buttons['create']['name']     = 'Incluir';
        $buttons['create']['link']     = "$this->route.create";
        $buttons['create']['icon']     = 'fas fa-plus';
        $buttons['create']['class']    = 'btn btn-light';
        $buttons['create']['color']    = 'text-primary';

        $buttons['delete']['name']     = 'Excluir';
        $buttons['delete']['link']     = "$this->route.delete";
        $buttons['delete']['icon']     = 'fas fa-trash';
        $buttons['delete']['class']    = 'btn btn-light';
        $buttons['delete']['color']    = '';

        $buttons['destroy']['name']    = 'Excluir';
        $buttons['destroy']['link']    = "$this->route.destroy";
        $buttons['destroy']['icon']    = 'fas fa-trash';
        $buttons['destroy']['class']   = 'btn btn-danger';
        $buttons['destroy']['color']   = '';

        $buttons['edit']['name']       = 'Editar';
        $buttons['edit']['link']       = "$this->route.edit";
        $buttons['edit']['icon']       = 'fas fa-edit';
        $buttons['edit']['class']      = 'btn btn-light';
        $buttons['edit']['color']      = '';

        $buttons['show']['name']       = 'Exibir';
        $buttons['show']['link']       = "$this->route.show";
        $buttons['show']['icon']       = 'fas fa-folder-open-o';
        $buttons['show']['class']      = 'btn btn-light';
        $buttons['show']['color']      = '';

        return $buttons;
    }

    /**
     * Display a listing of the combos.
     *
     * @return \App\Combo
     */
    public function getCombos()
    {
        //$combos['scope'] = comboc::optionsForSelect('scope');

        //$combo = new Combo();

        $combos['scope'] = $this->combo->optionsForSelect('scope');

        //$combos['users']     = $combo->usersForSelect();
        //$combos['yesno']     = $combo->optionsForSelect('yesno');
        //$combos['state']     = $combo->optionsForSelect('state');
        //$combos['percent10'] = $combo->optionsForSelect('percent10');

        return $combos;
    }

    /**
     * Display a listing of the messages.
     *
     * @return \array
     */
    private function getMessages()
    {
        $messages['success']['store']  = 'Registro incluído com sucesso!';
        $messages['success']['update'] = 'Registro atualizado com sucesso!';
        $messages['success']['delete'] = 'Registro excluído com sucesso!';
        $messages['error']['find']     = 'Registro não localizado!';
        $messages['error']['delete']   = 'Falha ao excluir o registro!';

        return $messages;
    }

    /**
     * Display a listing of the options.
     *
     * @return \array
     */
    private function getOptions()
    {
        $options['form']['disabled']  = 'disabled';
        $options['list']['paginated'] = 15;
        $options['page']['footer'] = false;

        return $options;
    }


}
