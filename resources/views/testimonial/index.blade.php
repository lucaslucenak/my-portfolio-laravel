<section id="testimonials">
    <h5>Review from partners</h5>
    <h2>Testimonials</h2>

    <Swiper className="container testimonials__container"
    // install Swiper modules
    modules={[Pagination]}
    spaceBetween={540}
    slidesPerView={1}
    pagination={{ clickable: true }}>
    {
    data.map(({avatar, name, review}, index) => {
    return (
    <SwiperSlide key={index} className="testimonial">
        <div className="client__avatar">
            <img src={avatar}/>
        </div>
        <h5 className='client__name'>{name}</h5>
        <small className="client__review">{review}</small>
    </SwiperSlide>
    )
    })
    }

    </Swiper>
</section>
