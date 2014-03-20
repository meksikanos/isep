ALTER TABLE tbl_name DROP FOREIGN KEY fk_symbol;

DROP TABLE IF EXISTS projectStatus, project;

CREATE TABLE projectStatus (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    statusName VARCHAR(128) NOT NULL
) ENGINE=INNODB;


CREATE TABLE project (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(128) NOT NULL,
	status_id INTEGER,
	FOREIGN KEY (status_id)
	REFERENCES projectStatus(id)

) ENGINE=INNODB;

CREATE TABLE projectType (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    projectType VARCHAR(128) NOT NULL
) ENGINE=INNODB;


ALTER TABLE project ADD FOREIGN KEY (type_id) REFERENCES `projecttype` (`id`) ;

SELECT * FROM information_schema.TABLE_CONSTRAINTS 
WHERE information_schema.TABLE_CONSTRAINTS.CONSTRAINT_TYPE = 'FOREIGN KEY' 
AND information_schema.TABLE_CONSTRAINTS.TABLE_SCHEMA = 'myschema'
AND information_schema.TABLE_CONSTRAINTS.TABLE_NAME = 'mytable';

CREATE TABLE project_teammember (
    teamMember_id INTEGER NOT NULL,
    project_id INTEGER NOT NULL,
    FOREIGN KEY (teamMember_id) REFERENCES teammember(id),
    FOREIGN KEY (project_id) REFERENCES project(id),
    Primary Key(teamMember_id, project_id)
) ENGINE=INNODB;

CREATE TABLE comment (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    creation_ts TIMESTAMP NOT NULL,
    modification_ts TIMESTAMP NOT NULL,
    project_id INTEGER NOT NULL,
    eventtype_id INTEGER NOT NULL,
    author VARCHAR(128) NOT NULL,
    last_mod_author VARCHAR(128) NOT NULL,
    comment_date DATE NOT NULL,
    comment TEXT NOT NULL,
	FOREIGN KEY (project_id)
	REFERENCES project(id),
	FOREIGN KEY (eventtype_id)
	REFERENCES eventtype(id)
       
) ENGINE=INNODB;







select 
count(*),
pt.projectType as type 
from project p 
left join projectstatus ps on p.status_id = ps.id
left join projecttype pt on p.type_id = pt.id
where p.status_id in(1,2,3,4,5,6,7,8) 
group by type