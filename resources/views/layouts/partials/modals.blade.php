<!-- Modal -->

<div class="modal fade" id="quickInquiryModal_remove" tabindex="-1" role="dialog" aria-labelledby="quickInquiryModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quickInquiryModalTitle">Quick Inquiry</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="#" method="post">
                @csrf
                <input type="hidden" name="return_url" value="{{ url()->full() }}">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="sender_name">Your Name <small class="text-danger">(Required)</small></label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <select name="sender_salutation" id="sender_salutation" class="form-control"
                                            style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option value="Mr">Mr.</option>
                                            <option value="Mrs">Mrs.</option>
                                            <option value="Ms">Ms.</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Rev">Rev.</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" id="sender_name" name="sender_name"
                                        aria-describedby="sender_name" autocomplete="off" autofocus required>
                                </div>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="sender_email">Your Email Address <small
                                        class="text-danger">(Required)</small></label>
                                <input type="email" class="form-control" id="sender_email" name="sender_email"
                                    aria-describedby="sender_email" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-7">
                            <div class="form-group">
                                <label for="sender_country">Your Country <small
                                        class="text-danger">(Required)</small></label>
                                <select name="sender_country" id="sender_country" class="form-control" required>
                                    @foreach (country_list() as $country)
                                        <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-group">
                                <label for="sender_phone">Your Phone Number <small
                                        class="text-danger">(Required)</small></label>
                                <input type="tel" class="form-control" id="sender_phone" name="sender_phone"
                                    aria-describedby="sender_phone" autocomplete="off" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sender_contact_options">Best to contact you on</label>
                        <div class="controls">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="contact_by_email" name="contact_by"
                                    class="custom-control-input" value="email" checked>
                                <label class="custom-control-label" for="contact_by_email">
                                    <i class="fas fa-envelope" style="color: #000000;"></i> Email
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="contact_by_phone" name="contact_by"
                                    class="custom-control-input" value="phone">
                                <label class="custom-control-label" for="contact_by_phone">
                                    <i class="fas fa-phone" style="color: #0000ff;"></i> Phone
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="contact_by_whatsapp" name="contact_by"
                                    class="custom-control-input" value="whatsapp">
                                <label class="custom-control-label" for="contact_by_whatsapp">
                                    <i class="fab fa-whatsapp-square" style="color: #5db71e;"></i> WhatsApp
                                </label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="contact_by_viber" name="contact_by"
                                    class="custom-control-input" value="viber">
                                <label class="custom-control-label" for="contact_by_viber">
                                    <i class="fab fa-viber"></i> Viber
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sender_message">Message</label>
                        <div class="controls">
                            <textarea name="sender_message" id="sender_message" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" id="send_inquiry">Send</button>
                </div>
            </form>
        </div>
    </div>
</div>
