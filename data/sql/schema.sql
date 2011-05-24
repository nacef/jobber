CREATE TABLE assignment (id BIGINT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE experience (id BIGINT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE job_offer (id BIGINT AUTO_INCREMENT, job_reference VARCHAR(50), internal_title VARCHAR(255), external_title VARCHAR(255), status BIGINT, openings_number BIGINT, openings_remaining BIGINT, start_date DATETIME, end_date DATETIME, asap TINYINT(1), opening_cause BIGINT, is_active TINYINT(1), cause_comments LONGTEXT, job_family BIGINT, location BIGINT, assignment BIGINT, mission LONGTEXT, required_experience BIGINT, is_budgeted TINYINT(1), salary BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX location_idx (location), INDEX assignment_idx (assignment), INDEX required_experience_idx (required_experience), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE job_offer_studies (job_offer_id BIGINT, study_id BIGINT, PRIMARY KEY(job_offer_id, study_id)) ENGINE = INNODB;
CREATE TABLE location (id BIGINT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE study (id BIGINT AUTO_INCREMENT, name VARCHAR(50), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE job_offer ADD CONSTRAINT job_offer_required_experience_experience_id FOREIGN KEY (required_experience) REFERENCES experience(id);
ALTER TABLE job_offer ADD CONSTRAINT job_offer_location_location_id FOREIGN KEY (location) REFERENCES location(id);
ALTER TABLE job_offer ADD CONSTRAINT job_offer_assignment_assignment_id FOREIGN KEY (assignment) REFERENCES assignment(id);
ALTER TABLE job_offer_studies ADD CONSTRAINT job_offer_studies_study_id_study_id FOREIGN KEY (study_id) REFERENCES study(id);
ALTER TABLE job_offer_studies ADD CONSTRAINT job_offer_studies_job_offer_id_job_offer_id FOREIGN KEY (job_offer_id) REFERENCES job_offer(id);
