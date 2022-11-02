class Notification{

	success(){
	new Noty({
    type: 'success',
    layout: 'topRight',
    text: 'Some notification text',
    setTimeout: 1000,
		}).show();
	}

	alert(){
	new Noty({
    type: 'alert',
    layout: 'topRight',
    text: 'Are you sure?',
    setTimeout: 1000,
		}).show();
	}

	error(){
	new Noty({
    type: 'alert',
    layout: 'topRight',
    text: 'Something Went Wrong!',
    setTimeout: 1000,
		}).show();
	}

	warning(){
	new Noty({
    type: 'warning',
    layout: 'topRight',
    text: 'Ops Wrong',
    setTimeout: 1000,
		}).show();
	}

	image_validation(){
	new Noty({
    type: 'error',
    layout: 'topRight',
    text: 'Upload Image less than 1 MB',
    setTimeout: 1000,
		}).show();
	}

}

export default Notification = new Notification();