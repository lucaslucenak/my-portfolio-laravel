<section id="contact">
    <h5>Get In Touch!</h5>
    <h2>Contact Me</h2>

    <div className="container contact__container">
        <div className="contact__options">
            <article className="contact__option">
                <MdOutlineEmail className='contact__option-icon'/>
                <h4>Email</h4>
                <h5>lucas.lucenak@gmail.com</h5>
                <a href="mailto:lucas.lucenak@gmail.com" target="_blank">Send me an e-mail</a>
            </article>

            <article className="contact__option">
                <BsLinkedin className='contact__option-icon'/>
                <h4>Linkedin</h4>
                <h5>/in/lucas-lucena-6588271a3/</h5>
                <a href="https://www.linkedin.com/in/lucas-lucena-6588271a3/" target="_blank">Connect with me</a>
            </article>

            <article className="contact__option">
                <FaWhatsapp className='contact__option-icon'/>
                <h4>WhatsApp</h4>
                <h5>+55 83 98690-7270</h5>
                <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5583986907270" target="_blank">Send me a message</a>
            </article>
        </div>

        <form ref={form} onSubmit={sendEmail}>
            <input type="text" name='name' placeholder='Your Full Name' required/>
            <input type="email" name='email' placeholder='Your Email' required/>
            <textarea name="message" rows="7" placeholder='Your Message' required></textarea>
            <button type='submit' className="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>
)
