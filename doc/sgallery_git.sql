--
-- PostgreSQL database dump
--

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: sp_album; Type: TABLE; Schema: public; Owner: mic; Tablespace: 
--

CREATE TABLE sp_album (
    id_album integer NOT NULL,
    description character varying(100),
    name character(50) NOT NULL,
    user_id integer NOT NULL,
    category_id integer NOT NULL
);


ALTER TABLE public.sp_album OWNER TO mic;

--
-- Name: sp_album_id_album_seq; Type: SEQUENCE; Schema: public; Owner: mic
--

CREATE SEQUENCE sp_album_id_album_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.sp_album_id_album_seq OWNER TO mic;

--
-- Name: sp_album_id_album_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mic
--

ALTER SEQUENCE sp_album_id_album_seq OWNED BY sp_album.id_album;


--
-- Name: sp_album_id_album_seq; Type: SEQUENCE SET; Schema: public; Owner: mic
--

SELECT pg_catalog.setval('sp_album_id_album_seq', 1, false);


--
-- Name: sp_category; Type: TABLE; Schema: public; Owner: mic; Tablespace: 
--

CREATE TABLE sp_category (
    id_category integer NOT NULL,
    name character(30) NOT NULL,
    description character varying(150),
    date date NOT NULL
);


ALTER TABLE public.sp_category OWNER TO mic;

--
-- Name: sp_category_id_category_seq; Type: SEQUENCE; Schema: public; Owner: mic
--

CREATE SEQUENCE sp_category_id_category_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.sp_category_id_category_seq OWNER TO mic;

--
-- Name: sp_category_id_category_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mic
--

ALTER SEQUENCE sp_category_id_category_seq OWNED BY sp_category.id_category;


--
-- Name: sp_category_id_category_seq; Type: SEQUENCE SET; Schema: public; Owner: mic
--

SELECT pg_catalog.setval('sp_category_id_category_seq', 1, false);


--
-- Name: sp_level; Type: TABLE; Schema: public; Owner: mic; Tablespace: 
--

CREATE TABLE sp_level (
    id_level integer NOT NULL,
    role character(20) NOT NULL
);


ALTER TABLE public.sp_level OWNER TO mic;

--
-- Name: sp_level_id_level_seq; Type: SEQUENCE; Schema: public; Owner: mic
--

CREATE SEQUENCE sp_level_id_level_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.sp_level_id_level_seq OWNER TO mic;

--
-- Name: sp_level_id_level_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mic
--

ALTER SEQUENCE sp_level_id_level_seq OWNED BY sp_level.id_level;


--
-- Name: sp_level_id_level_seq; Type: SEQUENCE SET; Schema: public; Owner: mic
--

SELECT pg_catalog.setval('sp_level_id_level_seq', 5, true);


--
-- Name: sp_user; Type: TABLE; Schema: public; Owner: mic; Tablespace: 
--

CREATE TABLE sp_user (
    id_user integer NOT NULL,
    username character(20) NOT NULL,
    password character varying(100) NOT NULL,
    first_name character varying(50) NOT NULL,
    last_name character varying(50) NOT NULL,
    date date NOT NULL,
    email character varying(100) NOT NULL,
    web character varying(100),
    level_id integer NOT NULL,
    status integer NOT NULL,
    activation_key character varying(80) NOT NULL
);


ALTER TABLE public.sp_user OWNER TO mic;

--
-- Name: sp_user_id_user_seq; Type: SEQUENCE; Schema: public; Owner: mic
--

CREATE SEQUENCE sp_user_id_user_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.sp_user_id_user_seq OWNER TO mic;

--
-- Name: sp_user_id_user_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: mic
--

ALTER SEQUENCE sp_user_id_user_seq OWNED BY sp_user.id_user;


--
-- Name: sp_user_id_user_seq; Type: SEQUENCE SET; Schema: public; Owner: mic
--

SELECT pg_catalog.setval('sp_user_id_user_seq', 6, true);


--
-- Name: id_album; Type: DEFAULT; Schema: public; Owner: mic
--

ALTER TABLE sp_album ALTER COLUMN id_album SET DEFAULT nextval('sp_album_id_album_seq'::regclass);


--
-- Name: id_category; Type: DEFAULT; Schema: public; Owner: mic
--

ALTER TABLE sp_category ALTER COLUMN id_category SET DEFAULT nextval('sp_category_id_category_seq'::regclass);


--
-- Name: id_level; Type: DEFAULT; Schema: public; Owner: mic
--

ALTER TABLE sp_level ALTER COLUMN id_level SET DEFAULT nextval('sp_level_id_level_seq'::regclass);


--
-- Name: id_user; Type: DEFAULT; Schema: public; Owner: mic
--

ALTER TABLE sp_user ALTER COLUMN id_user SET DEFAULT nextval('sp_user_id_user_seq'::regclass);


--
-- Data for Name: sp_album; Type: TABLE DATA; Schema: public; Owner: mic
--

COPY sp_album (id_album, description, name, user_id, category_id) FROM stdin;
\.


--
-- Data for Name: sp_category; Type: TABLE DATA; Schema: public; Owner: mic
--

COPY sp_category (id_category, name, description, date) FROM stdin;
\.


--
-- Data for Name: sp_level; Type: TABLE DATA; Schema: public; Owner: mic
--

COPY sp_level (id_level, role) FROM stdin;
1	Suscriber           
2	Administrator       
3	Editor              
4	Author              
5	Contributor         
\.


--
-- Data for Name: sp_user; Type: TABLE DATA; Schema: public; Owner: mic
--

COPY sp_user (id_user, username, password, first_name, last_name, date, email, web, level_id, status, activation_key) FROM stdin;
3	a                   	9a70c777656c9c50c9061db337c4549de0582540	a	a	2010-08-10	mic@unixmexico.org		1	1	e480f16a4f7df269eb61f858dbea4bd7880e6646
4	b                   	e8037006590a5e06be35d528302f792485def764	b	b	2010-08-10	mic@unixmexico.org	http://mic.misretratos.com	1	1	e480f16a4f7df269eb61f858dbea4bd7880e6646
5	c                   	56c42bc60f322631e5e6b7069217912121d9dbd4	c	c	2010-08-10	mic@unixmexico.org	http://mic.misretratos.com	2	1	fc544e41bf75b83e85e0e5767c76154ed78d5f3c
6	d                   	005d8e0172161b3d35ce53f1d639fc45c079ffef	d	d	2010-08-10	mic@unixmexico.org	http://mic.misretratos.com	4	1	f13ddcf88e5c2dbf370c09a667e2cff686dbee7e
\.


--
-- Name: id_album; Type: CONSTRAINT; Schema: public; Owner: mic; Tablespace: 
--

ALTER TABLE ONLY sp_album
    ADD CONSTRAINT id_album PRIMARY KEY (id_album);


--
-- Name: id_category; Type: CONSTRAINT; Schema: public; Owner: mic; Tablespace: 
--

ALTER TABLE ONLY sp_category
    ADD CONSTRAINT id_category PRIMARY KEY (id_category);


--
-- Name: id_level; Type: CONSTRAINT; Schema: public; Owner: mic; Tablespace: 
--

ALTER TABLE ONLY sp_level
    ADD CONSTRAINT id_level PRIMARY KEY (id_level);


--
-- Name: id_user; Type: CONSTRAINT; Schema: public; Owner: mic; Tablespace: 
--

ALTER TABLE ONLY sp_user
    ADD CONSTRAINT id_user PRIMARY KEY (id_user);


--
-- Name: category_id; Type: FK CONSTRAINT; Schema: public; Owner: mic
--

ALTER TABLE ONLY sp_album
    ADD CONSTRAINT category_id FOREIGN KEY (category_id) REFERENCES sp_category(id_category) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: level_id; Type: FK CONSTRAINT; Schema: public; Owner: mic
--

ALTER TABLE ONLY sp_user
    ADD CONSTRAINT level_id FOREIGN KEY (level_id) REFERENCES sp_level(id_level) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: user_id; Type: FK CONSTRAINT; Schema: public; Owner: mic
--

ALTER TABLE ONLY sp_album
    ADD CONSTRAINT user_id FOREIGN KEY (user_id) REFERENCES sp_user(id_user) ON UPDATE CASCADE ON DELETE CASCADE;


--
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: sp_album; Type: ACL; Schema: public; Owner: mic
--

REVOKE ALL ON TABLE sp_album FROM PUBLIC;
REVOKE ALL ON TABLE sp_album FROM mic;
GRANT ALL ON TABLE sp_album TO mic;
GRANT ALL ON TABLE sp_album TO postgres;
GRANT ALL ON TABLE sp_album TO PUBLIC;


--
-- Name: sp_category; Type: ACL; Schema: public; Owner: mic
--

REVOKE ALL ON TABLE sp_category FROM PUBLIC;
REVOKE ALL ON TABLE sp_category FROM mic;
GRANT ALL ON TABLE sp_category TO mic;
GRANT ALL ON TABLE sp_category TO postgres;
GRANT ALL ON TABLE sp_category TO PUBLIC;


--
-- Name: sp_level; Type: ACL; Schema: public; Owner: mic
--

REVOKE ALL ON TABLE sp_level FROM PUBLIC;
REVOKE ALL ON TABLE sp_level FROM mic;
GRANT ALL ON TABLE sp_level TO mic;
GRANT ALL ON TABLE sp_level TO postgres;
GRANT ALL ON TABLE sp_level TO PUBLIC;


--
-- Name: sp_user; Type: ACL; Schema: public; Owner: mic
--

REVOKE ALL ON TABLE sp_user FROM PUBLIC;
REVOKE ALL ON TABLE sp_user FROM mic;
GRANT ALL ON TABLE sp_user TO mic;
GRANT ALL ON TABLE sp_user TO postgres;
GRANT ALL ON TABLE sp_user TO PUBLIC;


--
-- PostgreSQL database dump complete
--

